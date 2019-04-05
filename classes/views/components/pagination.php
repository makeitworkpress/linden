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
            'data'      => '', // Accepts data from the customizer
            'next'      => '', 
            'previous'  => ''
        ];

    }

    /**
     * Automatically returns the right title based on the template we're looking at
     * 
     * @return Void
     */
    public function populate() {

        global $post;

        foreach( ['next' => __('Next', 'linden'), 'previous' => __('Previous', 'linden')] as $key => $label ) {
            if( $this->atts[$key] ) {
                $this->properties[$key]   = $this->atts[$key];
            } elseif( isset($this->atts['data'][$post->post_type . '_pagination_' . $key]) && $this->atts['data'][$post->post_type . '_pagination_'  . $key] ) {
                $this->properties[$key]   = $this->atts['data'][$post->post_type . '_pagination_' . $key];
            } elseif( $post->post_type == 'portfolio' ) {
                $this->properties[$key]   = sprintf( __('%s Project', 'linden'), $label );
            } else {
                $this->properties[$key]   = sprintf( __('%s Post', 'linden'), $label );
            }
        }

    }

}