<?php
return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'user' => 'root',
                    'password' => '',
                    'dbname' => 'zf_doctrine',
                ]
            ]
        ]
    ]
];