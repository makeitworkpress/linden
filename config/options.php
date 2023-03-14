<?php
// Options configurations
defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

$options = [
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
                        'defer_CSS'                 => ['label' => __('Defer CSS', 'velocity')],
                        'defer_JS'                  => ['label' => __('Defer Javascript Loading', 'velocity')],
                        'disable_comments'          => ['label' => __('Disable Comments', 'velocity')],
                        'disable_block_styling'     => ['label' => __('Disable Block Styling', 'velocity')],
                        'disable_embed'             => ['label' => __('Disable Embed Scripts', 'velocity')],
                        'disable_emoji'             => ['label' => __('Disable Emoji', 'velocity')],
                        'disable_feeds'             => ['label' => __('Disable Feeds', 'velocity')],
                        'disable_heartbeat'         => ['label' => __('Disable Heartbeat', 'velocity')],
                        'slow_heartbeat'            => ['label' => __('Slow Down Heartbeat Script', 'velocity')],
                        'jquery_to_footer'          => ['label' => __('Move the jQuery Script to Footer', 'velocity')],
                        'disable_jquery'            => ['label' => __('Disable jQuery', 'velocity')],
                        'disable_jquery_migrate'    => ['label' => __('Disable jQuery Migrate', 'velocity')],
                        'disable_RSD'               => ['label' => __('Disable RSD', 'velocity')],
                        'disable_shortlinks'        => ['label' => __('Disable WordPress Shortlinks', 'velocity')],  
                        'disable_theme_editor'      => ['label' => __('Disable Theme Editor', 'velocity')],                     
                        'disable_version_numbers'   => ['label' => __('Remove WordPress Version Numbers from Scripts', 'velocity')],            
                        'disable_WLW_manifest'      => ['label' => __('Disable the WLW Manifest', 'velocity')],
                        'disable_WP_version'        => ['label' => __('Remove the WordPress Version from Front-end', 'velocity')],            
                        'disable_XMLRPC'            => ['label' => __('Disable XMLRPC', 'velocity')],
                        'limit_comments_JS'         => ['label' => __('Enqueue Comment JavaScript only on Comments', 'velocity')],
                        'remove_comments_style'     => ['label' => __('Remove Additional Styling for Comments', 'velocity')],
                        'limit_revisions'           => ['label' => __('Limit Post Revisions to 5', 'velocity')],
                    ],
                    'title'         => __('Theme Optimalizations', 'linden'),
                    'type'          => 'checkbox'
                ]                                                                           
            ]      
        ]                
    ]
];      