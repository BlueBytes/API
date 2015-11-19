<?php
return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params'      => [
                    'host'     => 'localhost',
                    'port'     => '3306',
                    'user'     => '',
                    'password' => '',
                    'dbname'   => '',
                ],
                // To automatically convert enum to string
                'doctrine_type_mappings' => [
                    'enum' => 'string'
                ]
            ]
        ]
    ],
];
