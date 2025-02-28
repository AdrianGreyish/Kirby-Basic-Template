<?php
return [
  'debug' => true,

  'languages' => [
    'detect' => true
  ],

  'smartypants' => [
        'doublequote.open'  => '&#171;',
        'doublequote.close' => '&#187;',

    ],

  'date.handler' => 'strftime',

  'panel' =>[
    'install' => true,
    'css' => 'assets/css/custom-panel.css'
    ],

  'thumbs' => [
        'presets' => [
            'default' => [''],
        ]
    ],

  'tobimori.seo.canonicalBase' => '',

  'thumbs' => [
    'srcsets' => [
      'my-srcset' => [
        '20000w' => ['width' => 1800, 'crop' => true, 'quality' => 100],
        '1200w' => ['width' => 1200, 'crop' => true, 'quality' => 95],
        '800w'  => ['width' =>  800, 'crop' => true, 'quality' => 90],
        '400w'  => ['width' =>  400, 'crop' => true, 'quality' => 80],
      ],
      'my-srcset-webp' => [
        '2000w' => ['width' => 1800, 'crop' => true, 'quality' => 100, 'format' => 'webp' ],
        '1200w' => ['width' => 1200, 'crop' => true, 'quality' => 95, 'format' => 'webp', 'sharpen' => 10],
        '800w'  => ['width' =>  800, 'crop' => true, 'quality' => 85, 'format' => 'webp', 'sharpen' => 10],
        '400w'  => ['width' =>  400, 'crop' => true, 'quality' => 75, 'format' => 'webp', 'sharpen' => 10],        
      ],
    ],
  ],

];
