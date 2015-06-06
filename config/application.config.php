<?php

$env = getenv('APP_ENV');

$prod = [
    'DoctrineModule',
    'DoctrineORMModule',
    'Application'
];
$dev = [
    'ZendDeveloperTools',
    'SanSessionToolbar',
    'ZfSnapEventDebugger',
    'OcraServiceManager',
    'Jhu\ZdtLoggerModule'
];

$modules = array_merge($prod, $dev);

if ($env == 'prod') {
    $modules = $prod;
}

return [
    'modules' => $modules,
    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],
        'config_glob_paths' => [
            'config/autoload/{,*.}{global,local}.php',
        ],
    ],
];
