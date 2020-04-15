<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1586941615,
    'checksum' => '3a2e53d837d08ef390b76ff1f144032d',
    'files' => [
        'templates/jl_filmmaker_free/custom/config/11' => [
            'index' => [
                'file' => 'templates/jl_filmmaker_free/custom/config/11/index.yaml',
                'modified' => 1586941581
            ],
            'layout' => [
                'file' => 'templates/jl_filmmaker_free/custom/config/11/layout.yaml',
                'modified' => 1586941581
            ]
        ],
        'templates/jl_filmmaker_free/custom/config/default' => [
            'index' => [
                'file' => 'templates/jl_filmmaker_free/custom/config/default/index.yaml',
                'modified' => 1586941581
            ],
            'layout' => [
                'file' => 'templates/jl_filmmaker_free/custom/config/default/layout.yaml',
                'modified' => 1586941581
            ]
        ],
        'templates/jl_filmmaker_free/config/default' => [
            'page/assets' => [
                'file' => 'templates/jl_filmmaker_free/config/default/page/assets.yaml',
                'modified' => 1586941579
            ],
            'page/body' => [
                'file' => 'templates/jl_filmmaker_free/config/default/page/body.yaml',
                'modified' => 1586941579
            ],
            'page/head' => [
                'file' => 'templates/jl_filmmaker_free/config/default/page/head.yaml',
                'modified' => 1586941579
            ],
            'particles/branding' => [
                'file' => 'templates/jl_filmmaker_free/config/default/particles/branding.yaml',
                'modified' => 1586941579
            ],
            'particles/copyright' => [
                'file' => 'templates/jl_filmmaker_free/config/default/particles/copyright.yaml',
                'modified' => 1586941579
            ],
            'particles/logo' => [
                'file' => 'templates/jl_filmmaker_free/config/default/particles/logo.yaml',
                'modified' => 1586941580
            ],
            'particles/social' => [
                'file' => 'templates/jl_filmmaker_free/config/default/particles/social.yaml',
                'modified' => 1586941580
            ],
            'styles' => [
                'file' => 'templates/jl_filmmaker_free/config/default/styles.yaml',
                'modified' => 1586941580
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'sample' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'content' => '&copy; 2017 by <a href="http://joomlead.com/" title="JoomLead" class="g-powered-by">JoomLead</a>. All rights reserved.',
                'css' => [
                    'class' => ''
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'date' => [
                    'start' => '2015',
                    'end' => 'now'
                ],
                'owner' => 'JoomLead Team',
                'link' => '',
                'target' => '_blank',
                'css' => [
                    'class' => ''
                ]
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => true,
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => true,
                'url' => '',
                'image' => 'gantry-media://logo/logo.png',
                'text' => 'JoomLead',
                'class' => 'g-logo'
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0,
                'forceTarget' => 0
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => ''
                ],
                'target' => '_blank',
                'display' => 'both',
                'title' => '',
                'items' => [
                    0 => [
                        'icon' => 'fa fa-facebook-square fa-fw',
                        'text' => '',
                        'link' => 'https://www.facebook.com/JoomLead',
                        'name' => 'Facebook'
                    ],
                    1 => [
                        'icon' => 'fa fa-twitter-square fa-fw',
                        'text' => '',
                        'link' => 'http://www.twitter.com/JoomLead',
                        'name' => 'Twitter'
                    ]
                ]
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'totop'
                ]
            ],
            'backtotop' => [
                'enabled' => true,
                'icon' => 'fa fa-angle-double-up'
            ],
            'sticky' => [
                'enabled' => true,
                'spacing' => 0
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false,
                    'ssl' => false,
                    'debug' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text',
                            'prepare' => false
                        ],
                        'edit' => false,
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'hits' => [
                            'enabled' => 'show'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ]
                ]
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'messages' => [
                'enabled' => true
            ],
            'module' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry',
                'attribs' => [
                    'class' => 'gantry',
                    'id' => '',
                    'extra' => [
                        
                    ]
                ],
                'layout' => [
                    'sections' => '3'
                ],
                'body_top' => '',
                'body_bottom' => ''
            ],
            'fontawesome' => [
                'enable' => 1
            ],
            'assets' => [
                'favicon' => '',
                'touchicon' => '',
                'css' => [
                    
                ],
                'javascript' => [
                    
                ]
            ],
            'head' => [
                'meta' => [
                    
                ],
                'head_bottom' => '',
                'atoms' => [
                    0 => [
                        'id' => 'backtotop-4536',
                        'type' => 'backtotop',
                        'title' => 'Back To Top',
                        'attributes' => [
                            'enabled' => '1',
                            'css' => [
                                'class' => ''
                            ],
                            'icon' => 'fa fa-angle-double-up'
                        ]
                    ],
                    1 => [
                        'id' => 'sticky-1650',
                        'type' => 'sticky',
                        'title' => 'Sticky',
                        'attributes' => [
                            'enabled' => '1',
                            'id' => 'g-navigation',
                            'spacing' => '0'
                        ]
                    ],
                    2 => [
                        'id' => 'assets-5167',
                        'type' => 'assets',
                        'title' => 'Custom CSS / JS',
                        'attributes' => [
                            'enabled' => '1',
                            'css' => [
                                
                            ],
                            'javascript' => [
                                0 => [
                                    'location' => 'gantry-assets://js/theme.js',
                                    'inline' => '',
                                    'in_footer' => '0',
                                    'extra' => [
                                        
                                    ],
                                    'priority' => '0',
                                    'name' => 'Theme Js'
                                ]
                            ]
                        ]
                    ],
                    3 => [
                        'type' => 'frameworks',
                        'title' => 'JavaScript Frameworks',
                        'attributes' => [
                            'enabled' => '1',
                            'jquery' => [
                                'enabled' => '1',
                                'ui_core' => '1',
                                'ui_sortable' => '0'
                            ],
                            'bootstrap' => [
                                'enabled' => '0'
                            ],
                            'mootools' => [
                                'enabled' => '0',
                                'more' => '0'
                            ]
                        ],
                        'id' => 'frameworks-6684'
                    ]
                ]
            ]
        ],
        'styles' => [
            'about' => [
                'background' => '#ffffff',
                'text-color' => '#000000'
            ],
            'accent' => [
                'color-1' => '#000000',
                'color-2' => '#e2a750'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#666666',
                'text-active-color' => '#232529'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '51rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '51rem'
            ],
            'error' => [
                'background' => '#000000',
                'text-color' => '#ffffff',
                'background-image' => ''
            ],
            'expanded' => [
                'background' => '#000000',
                'text-color' => '#ffffff'
            ],
            'features' => [
                'background' => '#000000',
                'text-color' => '#ffffff',
                'background-image' => ''
            ],
            'font' => [
                'family-default' => 'family=Roboto:500,700,900,400',
                'family-title' => 'family=Orbitron:500,700,900,400'
            ],
            'footer' => [
                'background' => '#000000',
                'text-color' => '#ffffff',
                'background-image' => ''
            ],
            'intro' => [
                'background' => '#000000',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => '#ffffff',
                'text-color' => '#000000'
            ],
            'menu' => [
                'col-width' => '200px',
                'animation' => 'g-fade'
            ],
            'menustyle' => [
                'text-color' => '#949494',
                'text-color-active' => '#e2a750',
                'sublevel-text-color' => '#949494',
                'sublevel-text-color-active' => '#e2a750',
                'sublevel-background' => '#000000'
            ],
            'navigation' => [
                'background' => '#181818',
                'text-color' => '#949494'
            ],
            'offcanvas' => [
                'background' => '#000000',
                'text-color' => '#ffffff',
                'toggle-color' => '#949494',
                'width' => '14rem',
                'toggle-visibility' => '1'
            ],
            'pagetitle' => [
                'background' => '#000000',
                'text-color' => '#ffffff',
                'background-image' => ''
            ],
            'services' => [
                'background' => '#000000',
                'text-color' => '#ffffff',
                'background-image' => ''
            ],
            'showcase' => [
                'background' => '#000000',
                'text-color' => '#ffffff'
            ],
            'team' => [
                'background' => '#000000',
                'text-color' => '#ffffff'
            ],
            'testimonials' => [
                'background' => '#ffffff',
                'text-color' => '#000000',
                'background-image' => ''
            ],
            'utility' => [
                'background' => '#000000',
                'text-color' => '#ffffff'
            ],
            'preset' => 'preset1'
        ],
        'index' => [
            'name' => '11',
            'timestamp' => 1586941581,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1586941580
            ],
            'positions' => [
                'breadcrumb' => 'Breadcrumb',
                'subscribe-ft' => 'Subscribe Footer'
            ],
            'sections' => [
                'navigation' => 'Navigation',
                'pagetitle' => 'Pagetitle',
                'sidebar' => 'Sidebar',
                'mainbar' => 'Mainbar',
                'aside' => 'Aside',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-7657' => 'Logo',
                    'logo-5573' => 'Logo'
                ],
                'menu' => [
                    'menu-5263' => 'Menu',
                    'menu-6663' => 'Menu'
                ],
                'position' => [
                    'position-position-2782' => 'Breadcrumb',
                    'position-position-6745' => 'Subscribe Footer',
                    'position-position-8700' => 'Breadcrumb',
                    'position-position-4237' => 'Subscribe Footer'
                ],
                'messages' => [
                    'system-messages-4126' => 'System Messages',
                    'system-messages-1029' => 'System Messages'
                ],
                'content' => [
                    'system-content-1246' => 'Page Content',
                    'system-content-3952' => 'Page Content'
                ],
                'custom' => [
                    'custom-4190' => 'Services',
                    'custom-8791' => 'Information Link',
                    'custom-9444' => 'Quick Contact',
                    'custom-6693' => 'Services',
                    'custom-3821' => 'Information Link',
                    'custom-7801' => 'Quick Contact'
                ],
                'spacer' => [
                    'spacer-6474' => 'Spacer',
                    'spacer-6235' => 'Spacer'
                ],
                'branding' => [
                    'branding-8780' => 'Branding',
                    'branding-3807' => 'Branding'
                ],
                'social' => [
                    'social-2328' => 'Social',
                    'social-4840' => 'Social'
                ],
                'mobile-menu' => [
                    'mobile-menu-5419' => 'Mobile-menu',
                    'mobile-menu-2118' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'navigation' => 'navigation',
                    'logo-7657' => 'logo-7657',
                    'menu-5263' => 'menu-5263',
                    'pagetitle' => 'pagetitle',
                    'position-position-2782' => 'position-position-2782',
                    'sidebar' => 'sidebar',
                    'mainbar' => 'mainbar',
                    'system-messages-4126' => 'system-messages-4126',
                    'system-content-1246' => 'system-content-1246',
                    'aside' => 'aside',
                    'footer' => 'footer',
                    'position-position-6745' => 'position-position-6745',
                    'custom-4190' => 'custom-4190',
                    'custom-8791' => 'custom-8791',
                    'custom-9444' => 'custom-9444',
                    'spacer-6474' => 'spacer-6474',
                    'branding-8780' => 'branding-8780',
                    'social-2328' => 'social-2328',
                    'offcanvas' => 'offcanvas',
                    'mobile-menu-5419' => 'mobile-menu-5419',
                    'logo-5573' => 'logo-7657',
                    'menu-6663' => 'menu-5263',
                    'position-position-8700' => 'position-position-2782',
                    'system-messages-1029' => 'system-messages-4126',
                    'system-content-3952' => 'system-content-1246',
                    'position-position-4237' => 'position-position-6745',
                    'custom-6693' => 'custom-4190',
                    'custom-3821' => 'custom-8791',
                    'custom-7801' => 'custom-9444',
                    'spacer-6235' => 'spacer-6474',
                    'branding-3807' => 'branding-8780',
                    'social-4840' => 'social-2328',
                    'mobile-menu-2118' => 'mobile-menu-5419'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1586941580
            ],
            'layout' => [
                'navigation' => [
                    
                ],
                'pagetitle' => [
                    
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
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'pagetitle' => [
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
                'sidebar' => [
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
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'container-main' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'section-horizontal-paddings',
                        'extra' => [
                            
                        ]
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'logo-7657' => [
                    'attributes' => [
                        'image' => 'gantry-media://logo/logo.png'
                    ]
                ],
                'menu-5263' => [
                    'block' => [
                        'variations' => 'align-right'
                    ]
                ],
                'position-position-2782' => [
                    'title' => 'Breadcrumb',
                    'attributes' => [
                        'key' => 'breadcrumb'
                    ]
                ],
                'position-position-6745' => [
                    'title' => 'Subscribe Footer',
                    'attributes' => [
                        'key' => 'subscribe-ft'
                    ]
                ],
                'custom-4190' => [
                    'title' => 'Services',
                    'attributes' => [
                        'html' => '<div class="footer-txt">
  <div class="ft-heading">
    <h4>Services</h4>
    <ul>
			<li><a href="#">Hire Studio</a></li>
			<li><a href="#">Outdoor Spot</a></li>
			<li><a href="#">Flexible Space</a></li>
			<li><a href="#">Production House Rent</a></li>
		</ul>
  </div>
</div>
'
                    ]
                ],
                'custom-8791' => [
                    'title' => 'Information Link',
                    'attributes' => [
                        'html' => '<div class="footer-txt">
  <div class="ft-heading">
    <h4>INFORMATION LINK</h4>
    <ul>
  		<li><a href="#">About Us</a></li>
  		<li><a href="#">Privacy Policy</a></li>
  		<li><a href="#">Terms &amp; Condition</a></li>
  		<li><a href="#">Pricing Of Filmcity</a></li>
  	</ul>
  </div>
</div>
'
                    ]
                ],
                'custom-9444' => [
                    'title' => 'Quick Contact',
                    'attributes' => [
                        'html' => '<div class="footer-txt">
  <div class="ft-heading">
    <h4>INFORMATION LINK</h4>
    <p>
      Address: House. 4, Rosd. 7, East city. Orled. Sydney. Australya.
    </p>
    <p>
      Phone:  +8801912345678 +8801912345678
    </p>
    <p>
      E-mail: www.filmcity@gmail.com filmcitycompany@gmail.com
    </p>
  </div>
</div>
'
                    ]
                ],
                'spacer-6474' => [
                    'block' => [
                        'class' => 'line'
                    ]
                ],
                'social-2328' => [
                    'attributes' => [
                        'items' => [
                            0 => [
                                'icon' => 'fa fa-facebook fa-fw',
                                'text' => '',
                                'link' => 'https://www.facebook.com/JoomLead',
                                'name' => 'Facebook'
                            ],
                            1 => [
                                'icon' => 'fa fa-twitter fa-fw',
                                'text' => '',
                                'link' => 'http://www.twitter.com/JoomLead',
                                'name' => 'Twitter'
                            ],
                            2 => [
                                'icon' => 'fa fa-pinterest-p fa-fw',
                                'text' => '',
                                'link' => '#',
                                'name' => 'Pinterest'
                            ],
                            3 => [
                                'icon' => 'fa fa-google-plus fa-fw',
                                'text' => '',
                                'link' => '#',
                                'name' => 'Google +'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
