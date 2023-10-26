<?php
/**
 * Prepares the variables that are used in the index template
 */
namespace Views;
use Views\Components as Components;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

class Index extends Template {

    /**
     * Prepare our variables for public display
     */
    protected function populate() {

        global $wp_query;

        if( is_front_page() ) {
            $this->properties['title'] = false;
        } elseif( is_search() ) {
            $this->properties['title'] = sprintf( 
                _n( '%1$s result for: %2$s', '%1$s results for: %2$s', $wp_query->found_posts, 'linden' ),
                '<span>' . number_format_i18n( $wp_query->found_posts ) . '</span>',
                '<span>' . get_search_query() . '</span>'
            );
        } elseif( is_author() ) {
            $this->properties['title'] = get_the_author();
        } elseif( is_tax() ) {
            $this->properties['title'] = single_term_title( '', false );
        } elseif( is_category() ) {
            $this->properties['title'] = single_cat_title( '', false );
        } elseif( is_tag() ) {
            $this->properties['title'] = '<i class="icon-tags"></i>' . single_tag_title( '', false );
        } elseif( isset(get_queried_object()->labels->name) ) {
            $this->properties['title'] = get_queried_object()->labels->name;
        } else {
            $this->properties['title'] = isset($this->data['customize']['posts_archive_title']) && $this->data['customize']['posts_archive_title'] ? $this->data['customize']['posts_archive_title'] : __('Blog', 'linden');
        }

        $this->properties['description']    = term_description();
        $this->loop = $this->getPostType() == 'portfolio' ? new Components\Projects(['customize' => $this->data['customize']]) : new Components\Posts(['customize' => $this->data['customize']]);

    }

    /**
     * Retrieves the post type of the archive, whether we are looking into our homepage with posts, a taxonomy page or a post type archive
     * 
     * @return string $type the post type
     */
    private function getPostType() {
        
        $type = 'post';
    
        global $wp_query;


        if( is_front_page() ) {

            $general    = get_theme_mod('linden_general');
            $type       = isset($general['home_post_type']) && $general['home_post_type'] ? $general['home_post_type'] : 'post';

        } elseif( isset($wp_query->query['post_type']) ) {
            $type       = $wp_query->query['post_type'];
        } elseif( $wp_query->tax_query->queried_terms ) {

            // Get the first of the queried taxonomies
            foreach( $wp_query->tax_query->queried_terms as $key => $vars ) {
                $taxonomy = $key;
                break;
            }
            // If our taxonomy is a string, get the object first
            if( is_string($taxonomy) ) {
                $taxonomy = get_taxonomy($taxonomy);
            }
            if( isset($taxonomy->object_type[0]) ) {
                $type   = $taxonomy->object_type[0];
            }       
        }

        return $type;

    }

}