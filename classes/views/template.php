<?php
/**
 * The default set-up for a views class, used in templates
 */
namespace Views;
use Reflectionclass as Reflectionclass;
use stdClass as stdClass;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

abstract class Template {

    /**
     * Contains our template properties ment for public display
     * @access Public
     */
    public $properties;

    /**
     * Contains our custom data
     * @access Protected
     */
    protected $data = [];    

    /**
     * Constructor
     */
    public function __construct() {

        // What are we looking at
        $child            = new ReflectionClass($this);
        $template         = str_replace('.php', '', basename($child->getFileName()) );        

        /**
         * Load some data into our templates
         */
        $this->data = apply_filters( 'linden_template_data', [
            'customize'         => get_theme_mod('linden_customizer'),
            'portfolio_meta'    => [], 
            'post_meta'         => [],
            'options'           => in_array($template, ['header', 'footer']) ? get_option('linden_options') : []
        ] );
        
        // Post specific data. We want to save these queries only to the singular post template themselves, as they are not used always
        if( is_singular() ) {
            
            global $post;

            // Executes only if the Singular class is instanciated.
            if( isset($post->post_type) && $post->post_type == 'portfolio' ) {
                $this->data['portfolio_meta']   = get_post_meta( $post->ID, 'linden_post_meta', true);   
            }

        }

        
        /**
         * Populates the properties variable (through the child classes)
         */
        $this->populate();


        /**
         * Makes all our properties filterable for devs
         */
        $this->properties = apply_filters('linden_' . $template . '_properties', $this->properties);

    }

    /**
     * Retrieves the template default header
     */
    public function header() {
        get_template_part('templates/header');
    } 
    
    /**
     * Retrieves the template default footer
     */
    public function footer() {
        get_template_part('templates/footer');
    }     

    /**
     * Children may use this function to populate this class with variables.
     */
    abstract protected function populate();

}