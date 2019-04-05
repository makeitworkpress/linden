<?php
/**
 * Prepares the variables that are used in the 404 template
 */
namespace Views;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

class Nothing extends Template {

    /**
     * Prepare our variables for public display
     */
    protected function populate() {

        foreach( ['title' => __('404', 'linden' ), 'description' => __('The page you requested could not be found. Perhaps try searching?', 'linden')] as $key => $default ) {
            $this->properties[$key] = isset($this->data['customize']['nothing_' . $key]) && $this->data['customize']['nothing_' . $key] ? $this->data['customize']['nothing_' . $key] : $default;
        }

    }

}