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
            [ 'name' => 'project-s', 'width' => 485, 'height' => 285, 'crop' => true],
            [ 'name' => 'project', 'width' => 970, 'height' => 570, 'crop' => true],
            [ 'name' => 'project-2x', 'width' => 1940, 'height' => 1140, 'crop' => true],
            [ 'name' => 'project-half', 'width' => 485, 'height' => 485, 'crop' => true],
            [ 'name' => 'project-half-2x', 'width' => 970, 'height' => 970, 'crop' => true],
            [ 'name' => 'project-third', 'width' => 325, 'height' => 325, 'crop' => true],
            [ 'name' => 'project-third-2x', 'width' => 650, 'height' => 650, 'crop' => true],
            [ 'name' => 'project-fourth', 'width' => 245, 'height' => 245, 'crop' => true]
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
            'title'         => __('Layout', 'linden'), 
            'sections'      => [ 
                [
                    'id'            => 'dimensions_layout',
                    'title'         => __('Dimensions', 'linden'),
                    'fields'    => [
                        [
                            'default'       => '',
                            'selector'      => ['selector' => '.header', 'property' => '.max-width'],
                            'id'            => 'header_width',
                            'title'         => __('Navigation Header Maximum Width', 'linden'),
                            'description'   => __('Sets a custom width for the navigation header.', 'linden'),
                            'type'          => 'dimension'
                        ],
                        [
                            'default'       => '',
                            'selector'      => ['selector' => '.main', 'property' => '.max-width'],
                            'id'            => 'content_width',
                            'title'         => __('Content Maximum Width', 'linden'),
                            'description'   => __('Sets a custom width for the main content.', 'linden'),
                            'type'          => 'dimension'
                        ]                                                  
                    ]
                ],                       
                [
                    'id'            => 'header_layout',
                    'title'         => __('Header', 'linden'),
                    'fields'    => [
                        [
                            'default'       => '',
                            'id'            => 'header_disable_title',
                            'title'         => __('Disable Navigation Header Title', 'linden'),
                            'description'   => __('Disables the Title and Description in Navigation Header.', 'linden'),
                            'type'          => 'checkbox'
                        ],                                                
                        [
                            'choices'       => [
                                'always'    => __('Always', 'linden'),
                                'tablet'    => __('On Tablets & Phones', 'linden'),
                                'mobiles'   => __('On Mobile Phones', 'linden')
                            ],
                            'default'       => '',
                            'id'            => 'header_hamburger',
                            'title'         => __('Navigation Hamburger Menu', 'linden'),
                            'description'   => __('When do you want to display the hamburger menu?', 'linden'),
                            'type'          => 'select'
                        ]                         
                    ]                            
                ],
                [
                    'id'            => 'posts_layout',
                    'title'         => __('Posts', 'linden'),
                    'fields'    => [
                        [
                            'default'       => __('Blog', 'linden'),
                            'id'            => 'posts_archive_title',
                            'title'         => __('Post Archive Title', 'linden'),
                            'description'   => __('The default title shown above posts in posts archives. Leave empty to remove.', 'linden'),
                            'type'          => 'input'
                        ], 
                        [
                            'default'       => '',
                            'id'            => 'posts_meta_disable',
                            'title'         => __('Disable Post Meta', 'linden'),
                            'description'   => __('Disables the Post Meta in Archives and Single Posts.', 'linden'),
                            'type'          => 'checkbox'
                        ]                                                                       
                    ]
                ],
                [
                    'id'            => 'projects_layout',
                    'title'         => __('Projects', 'linden'),
                    'fields'    => [
                        [
                            'choices'       => [
                                'full'      => __('Full', 'linden'),
                                'half'      => __('Two', 'linden'),
                                'third'     => __('Three', 'linden'),
                                'fourth'     > __('Four', 'linden'),
                            ],
                            'default'       => '',
                            'id'            => 'portfolio_archive_columns',
                            'title'         => __('Projects Archives Columns', 'linden'),
                            'description'   => __('The number of columns used for displaying projects in archives.', 'linden'),
                            'type'          => 'select'
                        ],                                                                       
                    ]
                ],
                [
                    'id'            => 'footer_layout',
                    'title'         => __('Footer', 'linden'),
                    'fields'    => [
                        [
                            'default'       => '',
                            'id'            => 'footer_disable',
                            'title'         => __('Disable Footer', 'linden'),
                            'description'   => __('Disables the Footer completely.', 'linden'),
                            'type'          => 'checkbox'
                        ], 
                        [
                            'default'       => '',
                            'id'            => 'footer_copyright',
                            'title'         => __('Footer Copyright', 'linden'),
                            'description'   => __('Adds a custom copyright text within the footer.', 'linden'),
                            'type'          => 'input'
                        ],                         
                    ]
                ]                               
            ]
        ],
        'customizerColor'   => [
            'id'            => 'linden_colors',
            'panel'         => true,
            'title'         => __('Colors', 'linden'),
            'sections'        => [
                [
                    'id'            => 'colors_general',
                    'title'         => __('General', 'linden'),
                    'fields'    => [
                        [
                            'default'       => '',
                            'selector'      => 'body',
                            'id'            => 'body_font_color',
                            'title'         => __('Font Color', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],                  
                        [
                            'default'       => '',
                            'selector'      => 'h1, h2, h3, h4, h5, h6, .posts .entry-title a, .projects .entry-title a, .main-title a',
                            'id'            => 'body_heading_color',
                            'title'         => __('Heading Color', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],
                        [
                            'default'       => '',
                            'selector'      => 'a',
                            'id'            => 'body_link_color',
                            'title'         => __('Link Color', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],
                        [
                            'default'       => '',
                            'selector'      => 'a:hover, .posts .entry-title a:hover, .projects .entry-title a:hover, .entry-meta a:hover, .main-title a:hover',
                            'id'            => 'body_link_hover_color',
                            'title'         => __('Link Hover Color', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],
                        [
                            'default'       => '',
                            'selector'      => 'blockquote',
                            'id'            => 'blockquote_color',
                            'title'         => __('Blockquote Color', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],                       
                    ]
                ],
                [
                    'id'            => 'colors_header',
                    'title'         => __('Header', 'linden'),
                    'fields'    => [
                        [
                            'default'       => '',
                            'selector'      => ['selector' => '.header', 'property' => 'background-color'],
                            'id'            => 'header_background_color',
                            'title'         => __('Header Background Color', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],                                  
                        [
                            'default'       => '',
                            'selector'      => '.main-navigation a',
                            'id'            => 'header_link_color',
                            'title'         => __('Navigation Link Color', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.main-navigation a:hover, .main-navigation .current-menu-item > a',
                            'id'            => 'header_link_hover_color',
                            'title'         => __('Navigation Hover & Active Color', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],
                        [
                            'default'       => '',
                            'selector'      => ['selector' => '.main-navigation a:hover, .main-navigation .current-menu-item > a', 'property' => 'background-color'],
                            'id'            => 'header_link_hover_background_color',
                            'title'         => __('Navigation Hover & Active Background Color', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.main-navigation .hamburger-menu',
                            'id'            => 'header_hamburger_color',
                            'title'         => __('Navigation Hamburger Menu Color', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ]                                              
                    ]
                ],
                [
                    'id'            => 'colors_page',
                    'title'         => __('Pages', 'linden'),
                    'fields'    => [
                        [
                            'default'       => '',
                            'selector'      => '.page .entry-header h1, .archive .entry-header h1',
                            'id'            => 'page_title_color',
                            'title'         => __('Page Title Colors', 'velocity'),
                            'description'   => __('Adjusts the title colors for pages.', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.page .entry-content',
                            'id'            => 'page_content_color',
                            'title'         => __('Page Content Colors', 'velocity'),
                            'description'   => __('Adjusts the content text colors for pages.', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ]                        
                    ]
                ],                
                [
                    'id'            => 'colors_post',
                    'title'         => __('Posts', 'linden'),
                    'fields'    => [
                        [
                            'default'       => '',
                            'selector'      => '.post .entry-header h1',
                            'id'            => 'post_title_color',
                            'title'         => __('Page Title Colors', 'velocity'),
                            'description'   => __('Adjusts the title colors for posts.', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.entry-meta',
                            'id'            => 'entry_meta_color',
                            'title'         => __('Entry Meta Colors', 'velocity'),
                            'description'   => __('Adjusts the color for post meta, such as the date, and category a post is in.', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.post .entry-content',
                            'id'            => 'post_content_color',
                            'title'         => __('Post Content Colors', 'velocity'),
                            'description'   => __('Adjusts the content text colors for posts.', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ]                        
                    ]
                ],
                [
                    'id'            => 'colors_portfolio',
                    'title'         => __('Projects', 'linden'),
                    'fields'    => [                                        
                        [
                            'default'       => '',
                            'selector'      => '.portfolio .entry-header h1',
                            'id'            => 'portfolio_title_color',
                            'title'         => __('Projects Title Colors', 'velocity'),
                            'description'   => __('Adjusts the title colors for projects.', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.portfolio .entry-content',
                            'id'            => 'portfolio_content_color',
                            'title'         => __('Projects Content Colors', 'velocity'),
                            'description'   => __('Adjusts the content text colors for projects.', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],  
                        [
                            'default'       => '',
                            'selector'      => '.projects .entry-title, .projects .entry-title a',
                            'id'            => 'portfolio_archive_title_color',
                            'title'         => __('Projects Archive Title Colors', 'velocity'),
                            'description'   => __('Adjusts the title colors for projects in archives.', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],
                        [
                            'default'       => '',
                            'selector'      => ['.projects .entry-header', 'selector' => 'background-color'],
                            'id'            => 'portfolio_archive_overlay_color',
                            'title'         => __('Projects Archive Title Background Color', 'velocity'),
                            'description'   => __('Adjusts the title background color for projects in archives.', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ]                                         
                    ]
                ],              
                [
                    'id'            => 'colors_footer',
                    'title'         => __('Footer', 'linden'),
                    'fields'    => [
                        [
                            'default'       => '',
                            'selector'      => ['.footer', 'selector' => 'background-color'],
                            'id'            => 'footer_background',
                            'title'         => __('Footer Background Color', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],                                                                                                
                        [
                            'default'       => '',
                            'selector'      => '.footer',
                            'id'            => 'footer_color',
                            'title'         => __('Footer Text Colors', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.footer a',
                            'id'            => 'footer_link_color',
                            'title'         => __('Footer Link Color', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.footer a:hover',
                            'id'            => 'footer_link_hover_color',
                            'title'         => __('Footer Link Hover Color', 'velocity'),
                            'transport'     => 'postMessage',
                            'type'          => 'colorpicker'
                        ]                       
                    ]
                ],                                                 

            ]
        ],
        'customizerTypography'  => [
            'id'            => 'linden_typography',
            'panel'         => true,
            'title'         => __('Typography', 'linden'),
            'sections'      => [
                [
                    'id'         => 'typography_general',
                    'title'     => __('General', 'linden'),
                    'fields'    => [
                        [
                            'default'       => '',
                            'selector'      => 'body',
                            'id'            => 'body_typography',
                            'title'         => __('General Typography', 'velocity'),
                            'type'          => 'typography'
                        ],
                        [
                            'default'       => '',
                            'selector'      => 'h1, h2, h3, h4, h5, h6',
                            'id'            => 'heading_typography',
                            'title'         => __('Headings Typography', 'velocity'),
                            'description'   => __('The default font for the headings. Be aware that this will affect all headings.', 'velocity'),
                            'type'          => 'typography'
                        ]                        
                    ]
                ],
                [
                    'id'         => 'typography_navigation',
                    'title'     => __('Navigation Header', 'linden'),
                    'fields'    => [
                        [
                            'default'       => '',
                            'selector'      => '.main-navigation',
                            'id'            => 'header_menu_typography',
                            'title'         => __('Navigation Menu Typography', 'velocity'),
                            'type'          => 'typography'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.site-title h2',
                            'id'            => 'header_name_typography',
                            'title'         => __('Site Title Typography', 'velocity'),
                            'type'          => 'typography'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.site-title p',
                            'id'            => 'header_description_typography',
                            'title'         => __('Site Description Typography', 'velocity'),
                            'type'          => 'typography'
                        ]                                                                        
                    ]
                ],
                [
                    'id'         => 'typography_page',
                    'title'     => __('Pages', 'linden'),
                    'fields'    => [
                        [
                            'default'       => '',
                            'selector'      => '.page .entry-header h1, .archive .entry-header h1',
                            'id'            => 'page_title_typography',
                            'title'         => __('Page Title Typography', 'velocity'),
                            'description'   => __('The typography for the main title in pages.', 'velocity'),
                            'type'          => 'typography'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.page .entry-content',
                            'id'            => 'page_content_typography',
                            'title'         => __('Page Content Typography', 'velocity'),
                            'description'   => __('The typography for the content in pages.', 'velocity'),
                            'type'          => 'typography'
                        ]                                                 
                    ]
                ], 
                [
                    'id'         => 'typography_post',
                    'title'     => __('Posts', 'linden'),
                    'fields'    => [
                        [
                            'default'       => '',
                            'selector'      => '.post .entry-header h1',
                            'id'            => 'post_title_typography',
                            'title'         => __('Post Title Typography', 'velocity'),
                            'description'   => __('The typography for the main title in pages.', 'velocity'),
                            'type'          => 'typography'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.entry-meta',
                            'id'            => 'post_meta_typography',
                            'title'         => __('Entry Meta Typography', 'velocity'),
                            'description'   => __('The typography for meta information such as author and date.', 'velocity'),
                            'type'          => 'typography'
                        ],                        
                        [
                            'default'       => '',
                            'selector'      => '.post .entry-content',
                            'id'            => 'post_content_typography',
                            'title'         => __('Post Content Typography', 'velocity'),
                            'description'   => __('The typography for the content in posts.', 'velocity'),
                            'type'          => 'typography'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.posts .entry-title',
                            'id'            => 'post_archive_title_typography',
                            'title'         => __('Posts Archives Post Title', 'velocity'),
                            'description'   => __('The typography for post titles within archives.', 'velocity'),
                            'type'          => 'typography'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.posts .entry-content',
                            'id'            => 'post_archive_content_typography',
                            'title'         => __('Posts Archives Content', 'velocity'),
                            'description'   => __('The typography for post content within archives.', 'velocity'),
                            'type'          => 'typography'
                        ],                                                                         
                    ]
                ],
                [
                    'id'         => 'typography_portfolio',
                    'title'     => __('Projects', 'linden'),
                    'fields'    => [
                        [
                            'default'       => '',
                            'selector'      => '.portfolio .entry-header h1',
                            'id'            => 'portfolio_title_typography',
                            'title'         => __('Projects Title Typography', 'velocity'),
                            'description'   => __('The typography for the main title in projects.', 'velocity'),
                            'type'          => 'typography'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.portfolio .entry-header p',
                            'id'            => 'portfolio_subtitle_typography',
                            'title'         => __('Projects Title Typography', 'velocity'),
                            'description'   => __('The typography for the subtitles in projects.', 'velocity'),
                            'type'          => 'typography'
                        ],                        
                        [
                            'default'       => '',
                            'selector'      => '.portfolio .entry-content',
                            'id'            => 'portfolio_content_typography',
                            'title'         => __('Page Content Typography', 'velocity'),
                            'description'   => __('The typography for the content in projects.', 'velocity'),
                            'type'          => 'typography'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.projects .entry-title',
                            'id'            => 'portfolio_archive_title_typography',
                            'title'         => __('Projects Archives Project Title', 'velocity'),
                            'description'   => __('The typography for project titles within project archives.', 'velocity'),
                            'type'          => 'typography'
                        ],
                        [
                            'default'       => '',
                            'selector'      => '.projects .entry-header p',
                            'id'            => 'portfolio_archive_subtitle_typography',
                            'title'         => __('Projects Archives Subtitle', 'velocity'),
                            'description'   => __('The typography for project subtitles within project archives.', 'velocity'),
                            'type'          => 'typography'
                        ]                                                  
                    ]
                ],
                [
                    'id'         => 'typography_footer',
                    'title'     => __('Footer', 'linden'),
                    'fields'    => [
                        [
                            'default'       => '',
                            'selector'      => '.footer',
                            'id'            => 'footer_typography',
                            'title'         => __('Footer Font', 'velocity'),
                            'type'          => 'typography'
                        ]                        
                    ]
                ]
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