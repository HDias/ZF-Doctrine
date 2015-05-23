<?php
namespace Application;

return [
    'abstract_factories' => [
        'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
        'Zend\Log\LoggerAbstractServiceFactory',
    ],
    'aliases' => [
        'translator' => 'MvcTranslator',
    ],
    'factories' => [
    ],
    'invokables' => [
    ],
    'services' => [
    ],
    'shared' => [
    ],
];
