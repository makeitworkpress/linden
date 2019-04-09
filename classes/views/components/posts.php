<?php
/**
 * Prepares the variables that are used in our comments component template
 */
namespace Views\Components;
use WP_Query as WP_Query;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

class Posts extends Component {  

    /**
     * The basic attributes for our class
     * 
     * @return Void
     */
    public function init() {
        
        // Our attributes
        $this->defaults     = ['customize' => ['container_width' => 0, 'post_archive_more' => '', 'post_meta_disable' => false], 'query' => ''];
        $this->properties   = ['posts' => [], 'pagination' => false];

    }

    /**
     * Automatically returns the right title based on the template we're looking at
     * 
     * @return Void
     */
    public function populate() {

        if( $this->atts['query'] ) {
            $wp_query = new WP_Query($this->atts['query']);
        } else {
            global $wp_query;
        }
        
        // There is nothing queried
        if( ! isset($wp_query) || ! isset($wp_query->posts) ) {
            return;
        }

        $size = $this->atts['customize']['container_width'] > 490 ? 'linden' : 'linden-s';

        foreach( $wp_query->posts as $post ) {
            $this->properties['posts'][$post->ID] = [ 
                'class'         => implode(' ', array_filter(get_post_class('post-item', $post->ID)) ),
                'excerpt'       => $this->excerpt($post),
                'image'         => has_post_thumbnail($post) ? get_the_post_thumbnail( $post, $size, ['itemprop' => 'image'] ) : false, 
                'link'          => esc_url( get_permalink($post) ),   
                'meta'          => $this->atts['customize']['post_meta_disable'] ? false : new Meta(),
                'more'          => $this->atts['customize']['post_archive_more'] ? $this->atts['customize']['post_archive_more'] : '',
                'title'         => esc_html( get_the_title($post) ),
                'title_attr'    => strip_tags( esc_html(get_the_title($post)) )                 
            ]; 
        }

        // Set-up the pagination
        if( $wp_query->max_num_pages > 1 ) {
            $this->properties['pagination'] = new Pagination(['query' => $wp_query, 'type' => 'archive']); 
        }         

    }

    /**
     * Generates a custom excerpt for our post. Based upon wp_trim_excerpt;
     * 
     * @param WP_Post $post The WP_Post object
     */
    private function excerpt( $post = null ) {

        $raw_excerpt    = '';
        $text           = '';

        // Should be an instance of WP_Post
        if( isset($post->post_content) ) {
            $text = strip_shortcodes( $post->post_content );
            $text = apply_filters( 'the_content', $text );
            $text = str_replace(']]>', ']]&gt;', $text);

            $excerpt_length = apply_filters( 'excerpt_length', 55 );
            $excerpt_more   = apply_filters( 'excerpt_more', ' ' . '&hellip;' );
            $text           = wp_trim_words( $text, $excerpt_length, $excerpt_more ); 

        }
        
        return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );

    }    

}