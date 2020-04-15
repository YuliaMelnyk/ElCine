<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\proyecto/templates/jl_filmmaker_free/blueprints/styles/accent.yaml',
    'modified' => 1586941579,
    'data' => [
        'name' => 'Accent Colors',
        'description' => 'Accent colors for the Filmmaker theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'color-1' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 1',
                    'default' => '#1dc6df'
                ],
                'color-2' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 2',
                    'default' => '#ffa800'
                ]
            ]
        ]
    ]
];
