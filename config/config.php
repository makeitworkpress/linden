<?php
// Contains all necessary configurations for the theme
$config = [
    'enqueue' => [
        ['handle' => 'linden', 'src' => get_template_directory_uri() . '/assets/css/linden.min.css'],    
        ['handle' => 'tinyslider', 'src' => get_template_directory_uri() . '/assets/js/vendor/tinyslider.min.js', 'action' => 'register'],
        [
            'handle'    => 'linden', 
            'src'       => get_template_directory_uri() . '/assets/js/linden.min.js', 
            'name'      => 'linden', 
            'localize'  => ['ajax' => admin_url( 'admin-ajax.php' ), 'nonce' => wp_create_nonce("redvelvetcake")]
        ]        
        ],
    'register' => [
        'imageSizes' => [
            [ 'name' => 'content-s', 'width' => 485, 'height' => 285, 'crop' => true],
            [ 'name' => 'content', 'width' => 970, 'height' => 570, 'crop' => true],
            [ 'name' => 'content-2x', 'width' => 1940, 'height' => 1140, 'crop' => true]
        ],
        'menus' => [
            'primary'  => __( 'Primary Navigation', 'linden' )
        ], 
        'postTypes' => [
            [
                'name'      => 'portfolio',
                'plural'    => __( 'Projects', 'linden' ),
                'singular'  => __( 'Project', 'linden' ),
                'args'      => [
                    'menu_icon'     => 'dashicons-images-alt', 
                    'has_archive'   => true, 
                    'show_in_rest'  => true, 
                    'supports'      => ['author', 'editor', 'thumbnail', 'title']
                ],
                'slug'      => 'portfolio'
            ]                         
        ],                       
    ],
    'settings' => [
        'customizerGeneral' => [
            'description'   => __('General Customizer settings for the Linden Theme.', 'linden'),
            'id'            => 'linden_general',
            'title'         => __('Linden', 'linden'), 
            'sections'      => [
                [
                    'id'            => 'title_tagline',
                    'priority'      => 2,
                    'title'         => __('Identity', 'linden'), 
                    'fields'        => [
                        [
                            'default'       => '',
                            'id'            => 'logo',
                            'title'         => __('Logo Image', 'linden'),
                            'type'          => 'media',
                        ]                            
                    ]          
                ]               
            ]
        ],
        'customizerLayout'  => [
            'description'   => __('Layout Customizer settings for the Linden Theme.', 'linden'),
            'id'            => 'linden_layout',
            'panel'         => true,
            'title'         => __('Theme Layout', 'linden'), 
            'sections'      => [        
                [
                    'id'            => 'header_layout',
                    'title'         => __('Header', 'linden'),
                    'type'          => 'heading',
                    'fields'    => [
                        [
                            'default'       => '',
                            'id'            => 'header_disable_title',
                            'title'         => __('Disable Navigation Header Title', 'linden'),
                            'description'   => __('Disables the Title and Description in Navigation Header.', 'linden'),
                            'type'          => 'checkbox'
                        ], 
                        [
                            'default'       => '',
                            'selector'      => ['selector' => '.header', 'property' => '.max-width'],
                            'id'            => 'header_width',
                            'title'         => __('Navigation Header Maximum Width', 'linden'),
                            'description'   => __('Sets a custom width for the navigation header.', 'linden'),
                            'type'          => 'dimension'
                        ],                                                
                        [
                            'choices'       => [
                                'always'    => __('Always', 'linden'),
                                'tablet'    => __('On Tablets & Phones', 'linden'),
                                'mobiles'   => __('On Mobile Phones', 'linden'),
                            ],
                            'default'       => '',
                            'id'            => 'header_hamburger',
                            'title'         => __('Navigation Hamburger Menu', 'linden'),
                            'description'   => __('When do you want to display the hamburger menu?', 'linden'),
                            'type'          => 'select'
                        ],                         
                    ]                            
                ]
                // Content
                // Portfolio
                // Blog
            ]
        ],
        'customizerColor'   => [
            'id'            => 'linden_colors',
            'panel'         => true,
            'title'         => __('Theme Colors', 'linden'),
            'sections'        => [
                // General Colors
                // Title Color
                // Body Font Color
                // Link Color

                // Header Background Color
                // Navigation Color
                // Active & Hover Navigation Color

                // Project Overlay Color
                // Project Overview Font Color

                // Footer Background Color
                // Text Background Color
            ]
        ],
        'customizerTypography'  => [
            'id'            => 'linden_typography',
            'panel'         => true,
            'title'         => __('Theme Typography', 'linden'),
            'sections'        => [
                // General Font
                // General Heading
                // Site Title
                // Site Description
                // Navigation
                // Page Title
                // Page Content
                // Blog overview
                // Blog Title
                // Blog Meta
                // Blog Content
                // Project Overview
                // Project Title 
                // Project Subtitle
                // Project Content
                // Footer + 
            ]
        ],
        'meta'          => [    
            'id'        => 'linden_post_meta',
            'title'     => __('Portfolio Fields', 'linden'),
            'screen'    => ['portfolio'],
            'type'      => 'post',
            'context'   => 'normal',
            'priority'  => 'default',
            'sections'  => [
                'general' => [
                    'id'        => 'section_one',
                    'title'     => __('Default Options', 'linden'),
                    'icon'      => 'settings',
                    'tabs'      => false,
                    'fields'    => [
                        [
                            'id'            => 'subtitle',
                            'title'         => __('Subtitle', 'linden'),
                            'description'   => __('Adds a subtitle under the title of the project.', 'linden'),
                            'type'          => 'textarea',
                            'rows'          => 3          
                        ],
                        [
                            'id'            => 'slider',
                            'title'         => __('Slider Items', 'linden'),
                            'description'   => __('Add images or video. These will appear in a slider on top of the project.', 'linden'),
                            'type'          => 'repeatable',
                            'fields'        => [
                                [
                                    'columns'       => 'half',
                                    'id'            => 'image',
                                    'title'         => __('Project Image', 'linden'),
                                    'description'   => __('The portfolio images for the project.', 'linden'),
                                    'multiple'      => false,
                                    'type'          => 'media',              
                                    'subtype'       => 'image',              
                                ],
                                [
                                    'columns'       => 'half',
                                    'id'            => 'video',
                                    'title'         => __('Video', 'linden'),
                                    'description'   => __('Add the url to a vimeo, youtube or self-hosted video here. This will replace the image.', 'linden'),
                                    'type'          => 'input',          
                                    'subtype'       => 'url'          
                                ]                                                                  
                            ]          
                        ]                        
                    ]
                ]
            ]
        ],
        'options'       => [
            'capability'    => 'manage_options',
            'class'         => 'tabs-left',
            'id'            => 'linden_options',
            'location'      => 'menu', 
            'menu_icon'     => 'dashicons-admin-generic',
            'menu_title'    => __('Linden', 'linden'),
            'menu_position' => 99,
            'title'         => __('Linden Theme Settings', 'linden'),
            'sections'      => [
                'general'   => [
                    'icon'          => 'settings',
                    'id'            => 'general',
                    'title'         => __('General Settings', 'linden'),
                    'description'   => __('General theme settings can be found here. Are you looking for lay-out related settings? These are located in the customizer.', 'linden'),
                    'fields'        => [                                                                        
                        [
                            'columns'       => 'half',
                            'description'   => __('Add the tracking identifier for Google Analytics here. It looks like this: UA-12345678-1. By default, it anonymizes visitor IPs.', 'linden'),
                            'id'            => 'tracking',
                            'title'         => __('Google Analytics Tracking ID', 'linden'),
                            'type'          => 'input',
                            'subtype'       => 'password'
                        ],
                        [
                            'columns'       => 'half',
                            'default'       => '',
                            'description'   => __('This determines what microdata is used, so that your website is resembling a person or organization.', 'linden'),
                            'id'            => 'scheme',
                            'options'       => [
                                'organization' => __('Organization', 'linden'),
                                'person'       => __('Person', 'linden')
                            ],
                            'title'         => __('Microscheme for Website Representation', 'linden'),
                            'type'          => 'select'
                        ]  
                    ]
                ],
                'optimize'   => [
                    'icon'      => 'check_circle',
                    'id'        => 'optimalizations',
                    'title'     => __('Optimalizations', 'linden'),
                    'fields'    => [ 
                        [
                            'default'       => '',
                            'description'   => __('Improve the loading performance for this theme by enabling optimalizations.', 'linden'),
                            'id'            => 'optimize',
                            'options'       => [
                                'lazyLoad'                  => ['label' => __('Enable Images and Iframe Lazyload', 'linden')],
                                'deferCSS'                  => ['label' => __('Defer CSS', 'linden')],
                                'deferJS'                   => ['label' => __('Defer Javascript Loading', 'linden')],
                                'disableComments'           => ['label' => __('Disable Comments', 'linden')],
                                'disableEmbed'              => ['label' => __('Disable Embed Scripts', 'linden')],
                                'disableEmoji'              => ['label' => __('Disable Emoji', 'linden')],
                                'disableFeeds'              => ['label' => __('Disable Feeds', 'linden')],
                                'disableHeartbeat'          => ['label' => __('Disable Heartbeat', 'linden')],
                                'slowHeartbeat'             => ['label' => __('Slow Down Heartbeat Script', 'linden')],
                                'jqueryToFooter'            => ['label' => __('Move the jQuery Script to Footer', 'linden')],
                                'disablejQuery'             => ['label' => __('Disable jQuery', 'linden')],
                                'disablejQueryMigrate'      => ['label' => __('Disable jQuery Migrate', 'linden')],
                                'disableRSD'                => ['label' => __('Disable RSD', 'linden')],
                                'disableShortlinks'         => ['label' => __('Disable WordPress Shortlinks', 'linden')],                      
                                'disableVersionNumbers'     => ['label' => __('Remove WordPress Version Numbers from Scripts', 'linden')],            
                                'disableWLWManifest'        => ['label' => __('Disable the WLW Manifest', 'linden')],
                                'disableWPVersion'          => ['label' => __('Remove the WordPress Version from Front-end', 'linden')],           
                                'disableXMLRPC'             => ['label' => __('Disable XMLRPC', 'linden')],
                                'limitRevisions'            => ['label' => __('Limit Post Revisions to 5', 'linden')],
                                'blockExternalHTTP'         => ['label' => __('Block external HTTP Requests', 'linden')],
                                'limitCommentsJS'           => ['label' => __('Enqueue Comment JavaScript only on Comments', 'linden')],
                                'removeCommentsStyle'       => ['label' => __('Remove Additional Styling for Comments', 'linden')]
                            ],
                            'title'         => __('Theme Optimalizations', 'linden'),
                            'type'          => 'checkbox'
                        ]                                                                           
                    ]      
                ]                
            ]
        ]      
    ]
];