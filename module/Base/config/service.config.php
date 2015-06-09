<?php

return [
    'abstract_factories' => [],
    'aliases' => [],
    'factories' => [
        \Base\Logger\Manager::class => \Base\Logger\SLFactory\ManagerSLFactory::class,
        'Logger' => \Base\Logger\SLFactory\LoggerSLFactory::class
    ],
    'invokables' => [
        \Base\Logger\Factory\ComponentsFactory::class => \Base\Logger\Factory\ComponentsFactory::class,
    ],
    'services' => [],
    'shared' => [],
];