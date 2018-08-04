<?php

use Zend\Db\Adapter\Adapter;

return [
    'driver'   => 'Pdo_Mysql',
    'dsn'      => 'mysql:dbname=blog;host=localhost',
    'username' => 'root',
    'password' => 'root',
    'driver_options' => [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
    ],
];
