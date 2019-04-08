<?php
/**
 * Prepares the variables that are used in the singular template for pages, portfolio items and posts
 */
namespace Views;
use Views\Components as Components;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

class Singular extends Template {

    /**
     * Prepare our variables for public display
     */
    protected function populate() {

        global $post;

        // Microschemes
        $this->properties['scheme']         = is_singular('post') ? 'itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting"' : 'itemscope="itemscope" itemtype="http://schema.org/CreativeWork"';
        $this->properties['text_scheme']    = is_singular('post') ? 'articleBody' : 'text';

        // Slider
        $this->slider                       = is_singular('projects') ? new Components\Slider(['customize' => $this->data['customize'], 'meta' => $this->data['meta']]) : false;

        // Page thumbnail
        $size                               = isset($this->data['customize']['main_width']) && $this->data['customize']['main_width'] > 970 ? 'linden-2x' : 'linden';
        $this->properties['image']          = has_post_thumbnail($post->ID) ? get_the_post_thumbnail($post, $size, ['itemprop' => $image]) : false;

        // Meta content
        $this->meta                         = is_single() && ! $this->data['post_meta_disable'] ? new Components\Meta() : false;                 

        // Content
        $this->properties['title']          = get_the_title();
        $this->properties['subtitle']       = $this->data['meta']['subtitle'];
        $this->properties['content']        = apply_filters( 'the_content', $post->post_content );
        $this->properties['pages']          = wp_link_pages( ['echo' => false] );

        // Other
        $this->pagination                   = isset($this->data['customize'][$post->post_type . '_pagination_enable']) && $this->data['customize'][$post->post_type . '_pagination_enable'] ? new Components\Pagination(['customize' => $this->data['customize']]) : false;
        $this->comments                     = is_singular('post') ? new Components\Comments() : false;


        /**
         * Additional content for Page Templates
         */

        // Pagination
        if( is_front_page() ) {
            $paged = get_query_var('page') ? get_query_var('page') : 1;
        } else {
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        }

        // Retrieving the loop
        if( is_page_template('Projects') ) {
            $this->loop = new Components\Projects(['customize' => $this->data['customize'], 'query' => ['post_type' => 'portfolio', 'paged' => $paged]]);
        } elseif( is_page_template('Blog') ) {
            $this->loop = new Components\Posts(['customize' => $this->data['customize'], 'query' => ['paged' => $paged]]);
        } else {
            $this->loop = false;
        }

    }

}