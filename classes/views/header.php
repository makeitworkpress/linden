<?php
/**
 * Prepares the variables that are used in our header template
 */
namespace Views;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

class Header extends Template {

    /**
     * Prepare our variables for public display
     */
    protected function populate() {

        $general                            = get_theme_mod('linden_general');

        // The title and description
        $this->properties['class']          = isset($this->data['customize']['header_hamburger']) && $this->data['customize']['header_hamburger'] ? 'header-' . $this->data['customize']['header_hamburger'] : 'header-tablets';
        $this->properties['title']          = isset($this->data['customize']['header_disable_title']) && $this->data['customize']['header_disable_title'] ? false : true;
        $this->properties['description']    = esc_html( get_bloginfo( 'description' ) );
        $this->properties['name']           = esc_attr( get_bloginfo('name') );
        $this->properties['url']            = esc_url( get_bloginfo('url') );          

        // The logo
        $this->properties['logo_scheme']    = isset($this->data['options']['scheme']) && $this->data['options']['scheme'] ? $this->data['options']['scheme'] : 'Organization';
        $this->properties['logo']           = isset($general['logo']) && $general['logo'] ? wp_get_attachment_image( $general['logo'], 'full', false, ['itemprop' => 'image'] ) : ''; 

        
        // Main Microschemes
        $this->properties['main_scheme']    = is_singular('post') || is_archive() || is_search() ? 'itemscope="itemscope" itemtype="http://schema.org/Blog"' : 'itemprop="mainContentOfPage"'; 
    
    }

}