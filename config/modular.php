<?php
return [
    'path' => base_path() . '/app/Modules',
    'base_namespace' => 'App\Modules',
    'groupWithoutPrefix' => 'Pub',

    'groupMidleware' => [
        'Shop' => [
            'web' => ['auth'],
            'api' => ['auth.api'],
        ]
    ],

    'modules' => [
        'Shop' => [
            'Admin'
        ],

        'Pub' => [

        ],
    ]
];
