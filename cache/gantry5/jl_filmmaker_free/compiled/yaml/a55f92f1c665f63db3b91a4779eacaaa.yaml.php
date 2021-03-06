<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\proyecto/templates/jl_filmmaker_free/blueprints/styles/testimonials.yaml',
    'modified' => 1586941579,
    'data' => [
        'name' => 'Testimonials Styles',
        'description' => 'Testimonials styles for the Filmmaker theme',
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
