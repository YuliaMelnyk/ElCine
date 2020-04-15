<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/proyecto/templates/jl_filmmaker_free/custom/config/_error/layout.yaml',
    'modified' => 1586941580,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => '_error',
            'timestamp' => 1499244726
        ],
        'layout' => [
            '/error/' => [
                0 => [
                    0 => 'custom-5794'
                ],
                1 => [
                    0 => 'logo-6758'
                ],
                2 => [
                    0 => 'system-messages-3346'
                ],
                3 => [
                    0 => 'system-content-9621'
                ],
                4 => [
                    0 => 'custom-9555'
                ]
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'error' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings section-vertical-paddings'
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
        ],
        'content' => [
            'custom-5794' => [
                'title' => 'Error Content',
                'attributes' => [
                    'html' => '<div class="error-txt">
  <img class="img-right" src="gantry-media://joomlead/error/404.png" alt="">
  <h2>Sorry , The Page You Looking For Does Not Exist</h2>
</div>'
                ]
            ],
            'logo-6758' => [
                'title' => 'Logo / Image'
            ],
            'custom-9555' => [
                'title' => 'Homepage Button',
                'attributes' => [
                    'html' => '<div class="homepage-bt">
  <a class="button er-bt" href="index.php">Go to Home Page</a>
  </div>
</div>
'
                ]
            ]
        ]
    ]
];
