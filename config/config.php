<?php
// Contains all basic configurations for the theme
defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

$config = [
    'enqueue' => [
        ['handle' => 'linden', 'src' => get_template_directory_uri() . '/assets/css/linden.min.css'],    
        ['handle' => 'tinyslider', 'src' => get_template_directory_uri() . '/assets/js/vendor/tinyslider.min.js', 'in_footer' => true],
        [
            'handle'    => 'linden', 
            'src'       => get_template_directory_uri() . '/assets/js/linden.min.js', 
            'in_footer' => true,
            'name'      => 'linden', 
            'localize'  => ['ajax' => admin_url( 'admin-ajax.php' ), 'nonce' => wp_create_nonce("redvelvetcake")]
        ]        
    ],
    'register' => [
        'imageSizes' => [
            [ 'name' => 'linden-s', 'width' => 485, 'height' => 285, 'crop' => true],
            [ 'name' => 'linden', 'width' => 970, 'height' => 570, 'crop' => true],
            [ 'name' => 'linden-2x', 'width' => 1940, 'height' => 1140, 'crop' => true],
            [ 'name' => 'linden-half', 'width' => 485, 'height' => 485, 'crop' => true],
            [ 'name' => 'linden-half-2x', 'width' => 970, 'height' => 970, 'crop' => true],
            [ 'name' => 'linden-third', 'width' => 325, 'height' => 325, 'crop' => true],
            [ 'name' => 'linden-third-2x', 'width' => 650, 'height' => 650, 'crop' => true],
            [ 'name' => 'linden-fourth', 'width' => 245, 'height' => 245, 'crop' => true]
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
        ]                      
    ]
];