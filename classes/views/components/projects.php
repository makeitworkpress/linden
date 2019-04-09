<?php
/**
 * Prepares the variables that are used in our comments component template
 */
namespace Views\Components;
use WP_Query as WP_Query;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

class Projects extends Component {  

    /**
     * The basic attributes for our class
     * 
     * @return Void
     */
    public function init() {
        
        // Our attributes
        $this->defaults     = ['customize' => ['main_width' => 0, 'portfolio_archive_columns' => 'full'], 'query' => ''];
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
        if( ! isset($wp_query) || ! isset($wp_query->query->posts) ) {
            return;
        }

        // @to extend - Add multiple column support for a grid based lay-out
        $size = $this->atts['customize']['main_width'] > 970 ? 'linden-2x' : 'linden';

        foreach( $wp_query->query->posts as $post ) {

            $meta               = get_post_meta($post, 'linden_meta', true);

            $this->properties['posts'][$post->ID] = [ 
                'class'         => implode(' ', array_filter(get_post_class('project-item ' . $this->atts['customize']['portfolio_archive_columns'], $post->ID)) ),
                'image'         => has_post_thumbnail($post) ? get_the_post_thumbnail( $post, $size, ['itemprop' => 'image'] ) : false, 
                'link'          => esc_url( get_permalink($post) ),   
                'subtitle'      => isset($meta['subtitle']) && $meta['subtitle'] ? $meta['subtitle'] : '',
                'title'         => esc_html( get_the_title($post) ),
                'title_attr'    => strip_tags( esc_html(get_the_title($post)) )                 
            ];                
        }

        // Set-up the pagination
        if( $wp_query->query->max_num_pages > 1 ) {
            $this->properties['pagination'] = new Pagination(['query' => $wp_query, 'type' => 'archive']); 
        }         

    }
}