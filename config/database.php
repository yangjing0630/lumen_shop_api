<?php
return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    |
    */

    'fetch' => PDO::FETCH_CLASS,

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */
    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */
    'connections' => [
        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST'),
            'port'      => env('DB_PORT', 3306),
            'database'  => env('DB_DATABASE'),
            'username'  => env('DB_USERNAME'),
            'password'  => env('DB_PASSWORD'),
            'charset'   => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_general_ci'),
            'prefix'    => env('DB_PREFIX', ''),
            'timezone'  => env('DB_TIMEZONE', '+00:00'),
            'strict'    => env('DB_STRICT_MODE', false),
        ],

        'mysql_origin' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST_ORIGIN'),
            'port'      => env('DB_PORT_ORIGIN', 3306),
            'database'  => env('DB_DATABASE_ORIGIN'),
            'username'  => env('DB_USERNAME_ORIGIN'),
            'password'  => env('DB_PASSWORD_ORIGIN'),
            'charset'   => env('DB_CHARSET_ORIGIN', 'utf8mb4'),
            'collation' => env('DB_COLLATION_ORIGIN', 'utf8mb4_general_ci'),
            'prefix'    => env('DB_PREFIX_ORIGIN', ''),
            'timezone'  => env('DB_TIMEZONE_ORIGIN', '+00:00'),
            'strict'    => env('DB_STRICT_MODE_ORIGIN', false),
        ],

        'mysql_bi' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST_BI', '10.117.68.114'),
            'port'      => env('DB_PORT_BI', 3306),
            'database'  => env('DB_DATABASE_BI'),
            'username'  => env('DB_USERNAME_BI'),
            'password'  => env('DB_PASSWORD_BI'),
            'charset'   => env('DB_CHARSET_BI', 'utf8mb4'),
            'collation' => env('DB_COLLATION_BI', 'utf8mb4_general_ci'),
            'prefix'    => env('DB_PREFIX_BI', ''),
            'timezone'  => env('DB_TIMEZONE_BI', '+00:00'),
            'strict'    => env('DB_STRICT_MODE_BI', false),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_DEFAULT_DATABASE', 0),
        ],
    ],
];