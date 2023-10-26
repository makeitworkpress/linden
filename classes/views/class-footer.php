<?php
/**
 * Prepares the variables that are used in our footer template
 */
namespace Views;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

class Footer extends Template {

    /**
     * Prepare our variables for public display
     */
    protected function populate() {

        $this->properties['copyright']  = isset($this->data['customize']['footer_copyright']) && $this->data['customize']['footer_copyright'] ? $this->data['customize']['footer_copyright'] : sprintf( __('Linden Theme by %s', 'linden'), '<a href="https://www.makeitwork.press" target="_blank" rel="external">Make it WorkPress</a>' );
        $this->properties['disable']    = isset($this->data['customize']['footer_disable']) && $this->data['customize']['footer_disable'] ? true : false;
        $this->properties['scheme']     = isset($this->data['options']['scheme']) && $this->data['options']['scheme'] ? $this->data['options']['scheme'] : 'Organization';

    }

}  