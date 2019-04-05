<?php 
/**
 * This class boots up the necessary theme functions
 */
use WP_Error as WP_Error;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

class Linden {  

    /**
     * Configurations object
     * @access public
     */
    public $config = null;

    /**
     * Data object
     * @access private
     */
    private $data = [];    

    /**
     * Determines whether a class has already been instanciated via the singleton pattern.
     * @access private
     */
    private static $instance = null;    
    
    /** 
     * Constructor. This allows the boot class to be only initialized once.
     */
    private function __construct() {     
        
        // Initializes basic modules
        $this->initialize(); 

    }    
        
    /**
     * Gets a single instance of Theme. Applies Singleton Pattern
     * 
     * @return object Velocity The Velocity theme instance 
     */
    public static function instance() {
        
        $c = get_called_class();
        
        // Return the instance if it does not yet exist
        if ( ! isset( self::$instance[$c] ) ) {
            self::$instance[$c] = new $c();
        }

        return self::$instance[$c];
    }
    
    /**
     * Initializes the theme
     * 
     * @return void
     */
    private function initialize() {

        /**
         * Load some required data
         */
        $this->data     = [
            'customize' => get_theme_mod('linden_customizer'),
            'options'   => get_option('linden_options')
        ];

        
        /**
         * Set-up configured modules
         */

        // Set-up all modules based on our configurations
        add_action( 'after_setup_theme', [$this, 'configure'] );

        // Set-up all modules based on our configurations
        add_action( 'after_setup_theme', [$this, 'modules'], 15, 1 );

        
        /**
         * Set-up default modules
         */

        // Enables our theme to be updated through an external repository, in this case github
        $updater = new MakeitWorkPress\WP_Updater\Boot( ['source' => 'https://github.com/makeitworkpress/linden'] );

        // Adds our optimalizations
        if( isset($this->data['options']['optimize']) && $this->data['options']['optimize'] ) {

            // We don't defer CSS in customize previews
            if( is_customize_preview() ) {
                $this->data['options']['optimize']['deferCSS'] = false;
            }

            $optimize = new MakeitWorkPress\WP_Optimize\Optimize($this->data['options']['optimize']);
        }

        /**
         * Modifies the default excerpt length
         */
        if( isset($this->data['customize']['excerpt_length']) && $this->data['customize']['excerpt_length'] ) {
            $custom = $this->data['customize']['excerpt_length'];
            add_filter( 'excerpt_length', function($length) use($custom) {
                return $custom;
            }, 999, 1);    
        } 
        
        // Adds a google analytics tracking code
        if( isset($this->data['options']['tracking']) && $this->data['options']['tracking'] ) {
            $tracking = $this->data['options']['tracking'];
            add_action('wp_head', function() use($tracking) {
                echo '<!-- Global site tag (gtag.js) - Google Analytics -->
                <script async="async" src="https://www.googletagmanager.com/gtag/js?id=' . $tracking . '"></script>
                <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag("js", new Date());
                  gtag("config", "' . $tracking . '", {"anonymize_ip": true });
                </script>';
            } );
        }

        // Removes Empty P in content
        add_filter('the_content', function($content) {
            $content = force_balance_tags( $content );
            $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
            $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
            return $content;
        }, 20, 1);
        
        
        /**
         * Extends the theme support
         */
        add_theme_support( 'html5', ['comment-list', 'comment-form', 'search-form', 'caption'] );	
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );  
        
        // Adjusted thumbnail size
        set_post_thumbnail_size( 270, 180, true );
        
        /**
         * Flush permalinks after switching to this theme
         */
        add_action( 'after_switch_theme', function() {
            flush_rewrite_rules();
        } ); 


        /**
         * Loads our template from the custom template directory, located in /templates
         */
        $templates = apply_filters(
            'linden_templates', 
            ['index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'home', 'frontpage', 'page', 'paged', 'search', 'single', 'singular', 'attachment']
        ); 
        
        foreach( $templates as $template ) {
            add_action("{$template}_template_hierarchy", function($templates) {
                
                $return = [];
                
                foreach($templates as $template) {
                    $return[] = 'templates/' . $template;    
                }
                
                return $return;
                
            });
        }
        
        /**
         * Changes the admin columns for Portfolio Projects
         */
        add_filter("manage_edit-portfolio_columns", function ($columns){
            $columns = array(
                "cb"            => "<input type=\"checkbox\" />",
                "title"         => __("Portfolio Project", 'linden'),
                "thumbnail"     => __("Thumbnail", 'linden'),
                "description"   => __("Excerpt", 'linden'),
            );  
            return $columns;
        } );

        add_action("manage_portfolio_posts_custom_column",  function($column){
    
            global $post;
        
            switch ($column) {
                case "thumbnail":
                    the_post_thumbnail();
                    break;
                case "description":
                    the_excerpt();
                    break;
            }
        
        } );

        /**
         * Adapt some of the basic customizer section titles
         */
        add_action( 'customize_register', function( $wp_customize ) {
            $wp_customize->get_section( 'title_tagline' )->title        = __('Identity', 'linden');           
            $wp_customize->get_section( 'static_front_page' )->title    = __('Homepage', 'linden');
        }, 20, 1 );

    }

    /** 
     * Set-up our configurations and loads our modules based upon these configurations
     * Hooked upon 'after_setup_theme' with default priority
     * 
     * @return void
     */
    public function configure() {

        // Loads our languages
        load_theme_textdomain( 'linden', get_template_directory() . '/languages' );

        // Loads our configurations (after the language is loaded)
        require_once( get_template_directory() . '/config/config.php' );

        $configurations = apply_filters( 'linden_configurations', $config );

        /**
         * Set-up our configurations as a configurations object, which has the add and edit public methods to make it editable
         * Of course, to edit this a child theme must hook on after_setup_theme in a priority between 10 and 15.
         */
        $this->config = new MakeitWorkPress\WP_Config\Config( $configurations );            
        
    }


    /** 
     * Loads our modules based upon these configurations
     * Hooked upon 'after_setup_theme' with 15 priority, so developers may hook on configurations earlier
     * 
     * @return void
     */
    public function modules() {

        $modules = apply_filters( 'linden_modules', [
            'enqueue'   => 'MakeitWorkPress\WP_Enqueue\Enqueue',
            'register'  => 'MakeitWorkPress\WP_Register\Register', 
            'settings'  => 'MakeitWorkPress\WP_Custom_Fields\Framework'
        ] );

        foreach( $this->config->configurations as $key => $configurations ) {

            // The modules should be set
            if( ! isset($modules[$key]) ) {
                continue;
            }
            
            // For settings, we utilize the Custom Fields framework
            if( $key == 'settings' ) {

                // Initialize our settings framework
                $framework = MakeitWorkPress\WP_Custom_Fields\Framework::instance();

                foreach( $this->config->configurations['settings'] as $frame => $options ) {
                    $frame = strpos($frame, 'customizer') !== false ? 'customizer' : $frame;
                    $framework->add( $frame, $options );    
                }

            // Other modules are just plain modules
            } elseif( $key == 'register' ) {
                ${$key} = new $modules[$key]( $this->config->configurations[$key], 'linden' );
            } else {
                ${$key} = new $modules[$key]( $this->config->configurations[$key] );
            }

        }

    }

}  