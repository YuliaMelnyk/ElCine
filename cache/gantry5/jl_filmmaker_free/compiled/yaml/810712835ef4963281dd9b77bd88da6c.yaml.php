<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\proyecto/templates/jl_filmmaker_free/blueprints/styles/menustyle.yaml',
    'modified' => 1586941579,
    'data' => [
        'name' => 'Menu Styles',
        'description' => 'Set menu style options.',
        'type' => 'core',
        'form' => [
            'fields' => [
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_toplevel' => [
                            'label' => 'Top Level',
                            'fields' => [
                                'text-color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Text',
                                    'default' => '#212121'
                                ],
                                'text-color-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover & Active Text',
                                    'default' => '#1dc6df'
                                ]
                            ]
                        ],
                        '_tab_sublevel' => [
                            'label' => 'Sub Level',
                            'fields' => [
                                'sublevel-text-color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Text',
                                    'default' => '#212121'
                                ],
                                'sublevel-text-color-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover & Active Text',
                                    'default' => '#1dc6df'
                                ],
                                'sublevel-background' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Background',
                                    'default' => '#ffffff'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
