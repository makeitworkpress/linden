<?php
// Meta configurations
defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

$meta = [    
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
];