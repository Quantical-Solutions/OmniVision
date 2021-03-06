<?php

return [

    'compile' => [

        /*
         * Compilation list of files needed to be used in ReactNative WebView.
         * Please fill CSS or JS files filtered by DOM places like in <head>
         * or <footer> (means before the </body> html DOM tag in the from[] array (sources paths).
         */

        'styles' => [
            base_path('public/css/app.css')
        ],
        'scripts' => [
            'head' => [
                base_path('public/js/jquery.min.js')
            ],
            'footer' => [
                base_path('public/js/app.js')
            ]
        ]
    ],

    /*
     * Navigation builder with navigation links corresponding to pages URL paths.
     * Please fill with your own navigation groups.
     */

    'navigation' => [
        'drawer' => [
            'logo' => true, // true | false
            'brand' => [
                'OmniVision Mobile Solution',
                'Quantical Solutions - IT & BI Solutions'
            ],
            'list' => [

            ]
        ],
        'settings' => [
            'active' => true, // true | false
            'title' => 'Settings', // String | null
            'list' => [

            ]
        ]
    ],

    /*
     * Set StatusBar BackgroundColor et FontColor
     */

    'statusBar' => [
        'backgroundColor' => '#FFF',
        'fontColor' => 'dark-content' // 'default' | 'light-content' | 'dark-content'
    ],

    /*
     * Set Your App theme style
     */

    'theme' => [
        'default' => 'light', // light | dark | null
        'custom' => [
            'primary' => '',
            'secondary' => '',
            'ternary' => '',
            'titles' => '',
            'content' => ''
        ]
    ]
];
