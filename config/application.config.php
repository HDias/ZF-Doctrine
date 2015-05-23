<?php
return [
    'modules' => [
        // Developer Tools
        'ZendDeveloperTools',
        'SanSessionToolbar',
        'ZfSnapEventDebugger',
        'OcraServiceManager',
        'Jhu\ZdtLoggerModule',

        'DoctrineModule',
        'DoctrineORMModule',
        'Application',
    ],
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
