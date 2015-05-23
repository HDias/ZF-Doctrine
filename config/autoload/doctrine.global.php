<?php
return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'host' => 'localhost',
                    'port' => '3306',
                    // Add in local.php
                    //'user' => 'root',
                    //'password' => '',
                    //'dbname' => 'nomeDoBanco',
                ]
            ]
        ]
    ]
];