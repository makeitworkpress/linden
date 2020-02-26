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
];      