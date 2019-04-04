<?php
/**
 * Prepares the variables that are used in our footer template
 */
namespace Views;
use Components as Components;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

class Footer extends Template {

    /**
     * Prepare our variables for public display
     */
    protected function populate() {

        $this->properties['copyright']  = $this->data['customize']['footer_copyright'];
        $this->properties['scheme']     = $this->data['options']['scheme'];

    }

}  