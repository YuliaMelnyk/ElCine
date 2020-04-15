<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/proyecto/templates/jl_filmmaker_free/custom/config/_offline/layout.yaml',
    'modified' => 1586941580,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => '_offline',
            'timestamp' => 1499244976
        ],
        'layout' => [
            'navigation' => [
                
            ],
            '/pagetitle/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'sidebar 20' => [
                            
                        ]
                    ],
                    1 => [
                        'mainbar 60' => [
                            
                        ]
                    ],
                    2 => [
                        'aside 20' => [
                            
                        ]
                    ]
                ]
            ],
            'footer' => [
                
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'navigation' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'pagetitle' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings section-vertical-paddings'
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'attributes' => [
                    'class' => ''
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'aside' => [
                'attributes' => [
                    'class' => ''
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings section-vertical-paddings',
                    'extra' => [
                        
                    ]
                ]
            ],
            'footer' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ]
        ]
    ]
];
