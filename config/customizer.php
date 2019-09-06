<?php
// Customizer configurations
defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

$customizer = [   
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
            ],
            [
                'id'            => 'static_front_page',
                'title'         => __('Homepage', 'linden'), 
                'fields'        => [
                    [
                        'choices'       => [
                            'post'      => __('Posts', 'linden'),
                            'portfolio' => __('Projects', 'linden')
                        ],
                        'default'       => 'post',
                        'id'            => 'home_post_type',
                        'title'         => __('Post Type Homepage', 'linden'),
                        'description'   => __('Which post type do you want to show on the homepage? Only applies when the homepage shows the latest posts.', 'linden'),
                        'type'          => 'select'
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
                        'selector'      => ['selector' => '.header', 'property' => 'max-width'],
                        'id'            => 'header_width',
                        'title'         => __('Navigation Header Maximum Width', 'linden'),
                        'description'   => __('Sets a custom width for the navigation header.', 'linden'),
                        'type'          => 'dimension'
                    ],
                    [
                        'default'       => '',
                        'selector'      => ['selector' => '.main', 'property' => 'max-width'],
                        'id'            => 'main_width',
                        'title'         => __('Main Area Maximum Width', 'linden'),
                        'description'   => __('Sets a custom width for the main area.', 'linden'),
                        'type'          => 'dimension'
                    ],
                    [
                        'default'       => '',
                        'selector'      => ['selector' => '.container', 'property' => 'max-width'],
                        'id'            => 'container_width',
                        'title'         => __('Container Maximum Width', 'linden'),
                        'description'   => __('Sets a custom width for containers centering all textual content.', 'linden'),
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
                            'tablets'   => __('On Tablets & Phones', 'linden'),
                            'phones'    => __('On Mobile Phones', 'linden')
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
                        'id'            => 'post_archive_title',
                        'title'         => __('Post Archive Title', 'linden'),
                        'description'   => __('The default  title shown above posts in posts archives.', 'linden'),
                        'type'          => 'input'
                    ],
                    [
                        'default'       => 55,
                        'id'            => 'excerpt_length',
                        'title'         => __('Excerpt Length', 'linden'),
                        'description'   => __('The excerpt lenghts for Posts in archives.', 'linden'),
                        'type'          => 'number'
                    ],                          
                    [
                        'default'       => '',
                        'id'            => 'post_archive_more',
                        'title'         => __('Read More Text', 'linden'),
                        'description'   => __('The read more text in Post archives. Leave empty to remove.', 'linden'),
                        'type'          => 'input'
                    ],                                               
                    [
                        'default'       => '',
                        'id'            => 'post_meta_disable',
                        'title'         => __('Disable Post Meta', 'linden'),
                        'description'   => __('Disables the Post Meta in Archives and Single Posts.', 'linden'),
                        'type'          => 'checkbox'
                    ],                                             
                    [
                        'default'       => '',
                        'id'            => 'post_pagination_enable',
                        'title'         => __('Enable Single Post Pagination', 'linden'),
                        'description'   => __('Enables the navigation to next and previous posts.', 'linden'),
                        'type'          => 'checkbox'
                    ], 
                    [
                        'default'       => __('Next Post', 'linden'),
                        'id'            => 'post_pagination_next',
                        'title'         => __('Post Pagination Next', 'linden'),
                        'description'   => __('The text for next posts in the post navigation in single posts.', 'linden'),
                        'type'          => 'input'
                    ], 
                    [
                        'default'       => __('Previous Post', 'linden'),
                        'id'            => 'post_pagination_previous',
                        'title'         => __('Post Pagination Previous', 'linden'),
                        'description'   => __('The text for previous posts in the post navigation in single posts.', 'linden'),
                        'type'          => 'input'
                    ]                                                                                                
                ]
            ],
            [
                'id'            => 'projects_layout',
                'title'         => __('Projects', 'linden'),
                'fields'    => [
                    // [
                    //     'choices'       => [
                    //         'full'      => __('Full', 'linden'),
                    //         'half'      => __('Two', 'linden'),
                    //         'third'     => __('Three', 'linden'),
                    //         'fourth'     > __('Four', 'linden'),
                    //     ],
                    //     'default'       => '',
                    //     'id'            => 'portfolio_archive_columns',
                    //     'title'         => __('Projects Archives Columns', 'linden'),
                    //     'description'   => __('The number of columns used for displaying projects in archives.', 'linden'),
                    //     'type'          => 'select'
                    // ],                                             
                    [
                        'default'       => '',
                        'id'            => 'portfolio_pagination_enable',
                        'title'         => __('Enable Single Post Pagination', 'linden'),
                        'description'   => __('Enables the navigation to next and previous posts.', 'linden'),
                        'type'          => 'checkbox'
                    ], 
                    [
                        'default'       => __('Next Project'),
                        'id'            => 'portfolio_pagination_next',
                        'title'         => __('Project Pagination Next', 'linden'),
                        'description'   => __('The text for next projects in the project navigation in single projects.', 'linden'),
                        'type'          => 'input'
                    ], 
                    [
                        'default'       => __('Previous Project'),
                        'id'            => 'portfolio_pagination_previous',
                        'title'         => __('Project Pagination Previous', 'linden'),
                        'description'   => __('The text for previous projects in the project navigation in single projects.', 'linden'),
                        'type'          => 'input'
                    ]                                                                       
                ]
            ],
            [
                'id'            => 'nothing_layout',
                'title'         => __('404 Page', 'linden'),
                'fields'    => [
                    [
                        'default'       => __('404', 'linden'),
                        'id'            => 'nothing_title',
                        'title'         => __('404 Page Title', 'linden'),
                        'description'   => __('The title of the 404 page.', 'linden'),
                        'type'          => 'input'
                    ], 
                    [
                        'default'       => __('The page you requested could not be found. Perhaps try searching?', 'linden'),
                        'id'            => 'nothing_description',
                        'title'         => __('404 Page Description', 'linden'),
                        'description'   => __('The description underneath the page title.', 'linden'),
                        'type'          => 'input'
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
                        'title'         => __('Font Color', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ], 
                    [
                        'default'       => '',
                        'selector'      => ['selector' => 'body', 'property' => 'background-color'],
                        'id'            => 'body_background_color',
                        'title'         => __('Background Color', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],                   
                    [
                        'default'       => '',
                        'selector'      => 'h1, h2, h3, h4, h5, h6, .posts .entry-title a, .projects .entry-title a, .main-title a',
                        'id'            => 'body_heading_color',
                        'title'         => __('Heading Color', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],
                    [
                        'default'       => '',
                        'selector'      => 'a',
                        'id'            => 'body_link_color',
                        'title'         => __('Link Color', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],
                    [
                        'default'       => '',
                        'selector'      => 'a:hover, .posts .entry-title a:hover, .projects .entry-title a:hover, .entry-meta a:hover, .main-title a:hover',
                        'id'            => 'body_link_hover_color',
                        'title'         => __('Link Hover Color', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],
                    [
                        'default'       => '',
                        'selector'      => 'blockquote, blockquote p',
                        'id'            => 'blockquote_color',
                        'title'         => __('Blockquote Color', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ]                                               
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
                        'title'         => __('Header Background Color', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],                                  
                    [
                        'default'       => '',
                        'selector'      => '.main-navigation ul li a',
                        'id'            => 'header_link_color',
                        'title'         => __('Navigation Link Color', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.main-navigation ul li a:hover, .main-navigation ul li.current-menu-item > a',
                        'id'            => 'header_link_hover_color',
                        'title'         => __('Navigation Hover & Active Color', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],
                    [
                        'default'       => '',
                        'selector'      => ['selector' => '.main-navigation ul li a:hover, .main-navigation ul li.current-menu-item > a', 'property' => 'background-color'],
                        'id'            => 'header_link_hover_background_color',
                        'title'         => __('Navigation Hover & Active Background Color', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.hamburger-menu',
                        'id'            => 'header_hamburger_color',
                        'title'         => __('Navigation Hamburger Menu Color', 'linden'),
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
                        'title'         => __('Page Title Colors', 'linden'),
                        'description'   => __('Adjusts the title colors for pages.', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.page .entry-content',
                        'id'            => 'page_content_color',
                        'title'         => __('Page Content Colors', 'linden'),
                        'description'   => __('Adjusts the content text colors for pages.', 'linden'),
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
                        'selector'      => '.post .entry-title, .post .entry-title a',
                        'id'            => 'post_title_color',
                        'title'         => __('Page Title Colors', 'linden'),
                        'description'   => __('Adjusts the title colors for posts.', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.entry-meta',
                        'id'            => 'entry_meta_color',
                        'title'         => __('Entry Meta Colors', 'linden'),
                        'description'   => __('Adjusts the color for post meta, such as the date, and category a post is in.', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.entry-meta a',
                        'id'            => 'entry_meta_link_color',
                        'title'         => __('Entry Meta Link Colors', 'linden'),
                        'description'   => __('Adjusts the link color for post meta, such as the date, and category a post is in.', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.entry-meta a:hover',
                        'id'            => 'entry_meta_hover_color',
                        'title'         => __('Entry Meta Link Hover Colors', 'linden'),
                        'description'   => __('Adjusts the link hover color for post meta, such as the date, and category a post is in.', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],                                                
                    [
                        'default'       => '',
                        'selector'      => '.post .entry-content',
                        'id'            => 'post_content_color',
                        'title'         => __('Post Content Colors', 'linden'),
                        'description'   => __('Adjusts the content text colors for posts.', 'linden'),
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
                        'selector'      => '.singular.portfolio .entry-header h1',
                        'id'            => 'portfolio_title_color',
                        'title'         => __('Projects Title Colors', 'linden'),
                        'description'   => __('Adjusts the title colors for projects.', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.singular.portfolio .sub-title',
                        'id'            => 'portfolio_subtitle_color',
                        'title'         => __('Projects Subtitle Colors', 'linden'),
                        'description'   => __('Adjusts the subtitle colors for projects.', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],                        
                    [
                        'default'       => '',
                        'selector'      => '.singular.portfolio .entry-content',
                        'id'            => 'portfolio_content_color',
                        'title'         => __('Projects Content Colors', 'linden'),
                        'description'   => __('Adjusts the content text colors for projects.', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],  
                    [
                        'default'       => '',
                        'selector'      => '.projects .entry-title, .projects .entry-title a',
                        'id'            => 'portfolio_archive_title_color',
                        'title'         => __('Projects Archive Title Colors', 'linden'),
                        'description'   => __('Adjusts the title colors for projects in archives.', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.projects .sub-title',
                        'id'            => 'portfolio_archive_subtitle_color',
                        'title'         => __('Projects Archive Subtitle Colors', 'linden'),
                        'description'   => __('Adjusts the subtitle colors for projects in archives.', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],                        
                    [
                        'default'       => '',
                        'selector'      => ['.project-caption', 'selector' => 'background-color'],
                        'id'            => 'portfolio_archive_overlay_color',
                        'title'         => __('Projects Archive Title Background Color', 'linden'),
                        'description'   => __('Adjusts the title background color for projects in archives.', 'linden'),
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
                        'selector'      => ['selector' => '.footer', 'property' => 'background-color'],
                        'id'            => 'footer_background',
                        'title'         => __('Footer Background Color', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],                                                                                                
                    [
                        'default'       => '',
                        'selector'      => '.footer',
                        'id'            => 'footer_color',
                        'title'         => __('Footer Text Colors', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.footer a',
                        'id'            => 'footer_link_color',
                        'title'         => __('Footer Link Color', 'linden'),
                        'transport'     => 'postMessage',
                        'type'          => 'colorpicker'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.footer a:hover',
                        'id'            => 'footer_link_hover_color',
                        'title'         => __('Footer Link Hover Color', 'linden'),
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
                        'title'         => __('General Typography', 'linden'),
                        'type'          => 'typography'
                    ],
                    [
                        'default'       => '',
                        'selector'      => 'h1, h2, h3, h4, h5, h6',
                        'id'            => 'heading_typography',
                        'title'         => __('Headings Typography', 'linden'),
                        'description'   => __('The default font for the headings. Be aware that this will affect all headings.', 'linden'),
                        'type'          => 'typography'
                    ]                        
                ]
            ],
            [
                'id'         => 'typography_navigation',
                'title'     => __('Header', 'linden'),
                'fields'    => [
                    [
                        'default'       => '',
                        'selector'      => '.main-navigation ul li a',
                        'id'            => 'header_menu_typography',
                        'title'         => __('Navigation Menu Typography', 'linden'),
                        'type'          => 'typography'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.site-title h2',
                        'id'            => 'header_name_typography',
                        'title'         => __('Site Title Typography', 'linden'),
                        'type'          => 'typography'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.site-title p',
                        'id'            => 'header_description_typography',
                        'title'         => __('Site Description Typography', 'linden'),
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
                        'selector'      => '.singular.page .entry-header h1, .archive .entry-header h1',
                        'id'            => 'page_title_typography',
                        'title'         => __('Page Title Typography', 'linden'),
                        'description'   => __('The typography for the main title in pages.', 'linden'),
                        'type'          => 'typography'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.page .entry-content',
                        'id'            => 'page_content_typography',
                        'title'         => __('Page Content Typography', 'linden'),
                        'description'   => __('The typography for the content in pages.', 'linden'),
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
                        'selector'      => '.singular.post .entry-header h1',
                        'id'            => 'post_title_typography',
                        'title'         => __('Post Title Typography', 'linden'),
                        'description'   => __('The typography for the main title in pages.', 'linden'),
                        'type'          => 'typography'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.entry-meta',
                        'id'            => 'post_meta_typography',
                        'title'         => __('Entry Meta Typography', 'linden'),
                        'description'   => __('The typography for meta information such as author and date.', 'linden'),
                        'type'          => 'typography'
                    ],                        
                    [
                        'default'       => '',
                        'selector'      => '.singular.post .entry-content',
                        'id'            => 'post_content_typography',
                        'title'         => __('Post Content Typography', 'linden'),
                        'description'   => __('The typography for the content in posts.', 'linden'),
                        'type'          => 'typography'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.posts .entry-title',
                        'id'            => 'post_archive_title_typography',
                        'title'         => __('Posts Archives Post Title', 'linden'),
                        'description'   => __('The typography for post titles within archives.', 'linden'),
                        'type'          => 'typography'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.posts .entry-content',
                        'id'            => 'post_archive_content_typography',
                        'title'         => __('Posts Archives Content', 'linden'),
                        'description'   => __('The typography for post content within archives.', 'linden'),
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
                        'selector'      => '.singular.portfolio .entry-header h1',
                        'id'            => 'portfolio_title_typography',
                        'title'         => __('Projects Title Typography', 'linden'),
                        'description'   => __('The typography for the main title in projects.', 'linden'),
                        'type'          => 'typography'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.singular.portfolio .entry-header p',
                        'id'            => 'portfolio_subtitle_typography',
                        'title'         => __('Projects Subtitle Typography', 'linden'),
                        'description'   => __('The typography for the subtitles in projects.', 'linden'),
                        'type'          => 'typography'
                    ],                        
                    [
                        'default'       => '',
                        'selector'      => '.singular.portfolio .entry-content',
                        'id'            => 'portfolio_content_typography',
                        'title'         => __('Projects Content Typography', 'linden'),
                        'description'   => __('The typography for the content in projects.', 'linden'),
                        'type'          => 'typography'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.projects .entry-title',
                        'id'            => 'portfolio_archive_title_typography',
                        'title'         => __('Projects Archives Project Title', 'linden'),
                        'description'   => __('The typography for project titles within project archives.', 'linden'),
                        'type'          => 'typography'
                    ],
                    [
                        'default'       => '',
                        'selector'      => '.projects .entry-header p',
                        'id'            => 'portfolio_archive_subtitle_typography',
                        'title'         => __('Projects Archives Subtitle', 'linden'),
                        'description'   => __('The typography for project subtitles within project archives.', 'linden'),
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
                        'title'         => __('Footer Font', 'linden'),
                        'type'          => 'typography'
                    ]                        
                ]
            ]
        ]
    ]
];