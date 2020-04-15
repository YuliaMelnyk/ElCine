<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\proyecto/templates/jl_filmmaker_free/blueprints/styles/services.yaml',
    'modified' => 1586941579,
    'data' => [
        'name' => 'Services Styles',
        'description' => 'Services styles for the Filmmaker theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#000000'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image'
                ]
            ]
        ]
    ]
];
