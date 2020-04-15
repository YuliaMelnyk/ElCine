<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\proyecto/templates/jl_filmmaker_free/blueprints/styles/base.yaml',
    'modified' => 1586941579,
    'data' => [
        'name' => 'Base Styles',
        'description' => 'Base styles for the Filmmaker theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Background',
                    'default' => '#000000'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Text Color',
                    'default' => '#ffffff'
                ],
                'text-active-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Text Active Color',
                    'default' => '#232529'
                ]
            ]
        ]
    ]
];
