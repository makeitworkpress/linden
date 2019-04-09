<?php
/**
 * Prepares the variables that are used in our pagination component template
 */
namespace Views\Components;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

class Pagination extends Component {  

    /**
     * The basic attributes for our class
     * 
     * @return Void
     */
    public function init() {
        
        // Our attributes
        $this->defaults = [
            'customize'     => '',      // Accepts data from the customizer
            'next'          => '', 
            'previous'      => '',
            'query'         => null,    // The wp_query object. Required if type is single
            'type'          => 'single' // Type of pagination, either accepts single or archive
        ];

        $this->properties = ['next' => __('Next Post', 'linden'), 'numbers' => '', 'previous' => __('Previous Post', 'linden')];

    }

    /**
     * Automatically returns the right title based on the template we're looking at
     * 
     * @return Void
     */
    public function populate() {

        global $post;

        $this->properties['type'] = $this->atts['type'];

        if( $this->atts['type'] == 'archive' && isset($this->atts['query']) ) {

            if( is_front_page() ) {
                $paged = get_query_var('page') ? get_query_var('page') : 1;
            } else {
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            }            

            $this->properties['numbers'] = paginate_links( [
                'base'          => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
                'current'       => $paged,
                'next_text'     => '&raquo;', 
                'prev_text'     => '&laquo;',
                'total'         => $this->atts['query']->max_num_pages                      
            ] );             

        } elseif( $this->atts['type'] == 'single' ) {

            foreach( ['next' => __('Next', 'linden'), 'previous' => __('Previous', 'linden')] as $key => $label ) {
                if( $this->atts[$key] ) {
                    $this->properties[$key]   = $this->atts[$key];
                } elseif( isset($this->atts['customize'][$post->post_type . '_pagination_' . $key]) && $this->atts['customize'][$post->post_type . '_pagination_'  . $key] ) {
                    $this->properties[$key]   = $this->atts['customize'][$post->post_type . '_pagination_' . $key];
                } elseif( $post->post_type == 'portfolio' ) {
                    $this->properties[$key]   = sprintf( __('%s Project', 'linden'), $label );
                } else {
                    $this->properties[$key]   = sprintf( __('%s Post', 'linden'), $label );
                }
            }

        }

    }

}