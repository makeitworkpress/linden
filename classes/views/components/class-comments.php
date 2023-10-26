<?php
/**
 * Prepares the variables that are used in our comments component template
 */
namespace Views\Components;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

class Comments extends Component {  

    /**
     * The basic attributes for our class
     * 
     * @return Void
     */
    public function init() {
        
        // Our attributes
        $this->defaults = ['template' => ''];

    }

    /**
     * Automatically returns the right title based on the template we're looking at
     * 
     * @return Void
     */
    public function populate() {

        if( $this->atts['template'] ) {
            $this->properties['file'] = $this->atts['template'];
        }  else {
            $this->properties['file'] = '/templates/compatible/comments.php';
        }

    }

}