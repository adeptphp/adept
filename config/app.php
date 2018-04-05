<?php

return [
    // general
    'name' => env('APP_NAME', 'Adept'),
    'version' => env('APP_VERSION', app()->version()),
    'debug' => env('APP_DEBUG',true),

    // System Directories
    'app_root' => __DIR__.'/../',
    'web_root' => __DIR__.'/../public',
    'providers' => [
        __DIR__.'/../app/Providers',
        ],
    'events' => [
        __DIR__.'/../app/Events',
        ],
    'listeners' => [
        __DIR__.'/../app/Listeners',
        ],
    'routes' => [
        __DIR__.'/../app/Routes',
        ],
    'views_dir' => __DIR__.'/../app/Views',
    'controllers' => [
        __DIR__.'/../app/Controllers',
        ],
    'controllers_namespace' => 'App\\Controllers',
    'commands' => [
        __DIR__.'/../app/Console/Commands',
        ],

    // Router and Route Settings
    'router' => [
        'cached' => true,
        'cachefile' => '/var/cache/routescache.php',
        'uri_prefix' => '',
        'request_alias' => 'request',
        '404' => '/app/Views/Error/404.php',
        '405' => '/app/Views/Error/405.php',
    ],

    // System Services
    'services' => [
    ],

];
