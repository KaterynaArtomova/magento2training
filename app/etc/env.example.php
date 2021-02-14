<?php
return [
    'backend' =>
    [
        'frontName' => '<ADMIN_URI>',
    ],
    'crypt' =>
    [
        'key' => '601ddf0220b9e7d0d972755a178d743d',
    ],
    'session' =>
    [
        'save' => 'redis',
        'redis' =>
        [
            'host' => '<REDIS_SESSIONS_SERVER>',
            'port' => '<REDIS_SESSIONS_PORT>',
            'password' => '',
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'database' => '<REDIS_SESSIONS_DB>',
            'compression_threshold' => '2048',
            'compression_library' => 'gzip',
            'log_level' => '1',
            'max_concurrency' => '6',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '60',
            'bot_lifetime' => '7200',
            'disable_locking' => '0',
            'min_lifetime' => '60',
            'max_lifetime' => '2592000',
        ],
    ],
    'db' =>
    [
        'table_prefix' => '',
        'connection' =>
        [
            'default' =>
            [
                'host' => '<MYSQL_HOST>',
                'dbname' => '<MYSQL_DATABASE>',
                'username' => '<MYSQL_USER>',
                'password' => '<MYSQL_PASSWORD>',
                'active' => '1',
            ],
        ],
    ],
    'resource' =>
    [
        'default_setup' =>
        [
            'connection' => 'default',
        ],
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => '<MAGE_MODE>',
    'cache_types' =>
    [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'google_product' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'install' =>
    [
        'date' => 'Fri, 15 May 2020 13:35:26 +0000',
    ],
    'cache' =>
    [
        'frontend' =>
        [
            'default' =>
            [
                'id_prefix' => 'ccf_',
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' =>
                [
                    'server'    => '<REDIS_CACHE_SERVER>',
                    'database'  => '<REDIS_CACHE_DB>',
                    'port'      => '<REDIS_CACHE_PORT>',
                ],
            ],
            'page_cache' =>
            [
                'id_prefix' => 'ccf_',
                'backend'   => 'Cm_Cache_Backend_Redis',
                'backend_options' =>
                [
                    'server'    => '<REDIS_CACHE_SERVER>',
                    'port'      => '<REDIS_CACHE_PORT>',
                    'database'  => '<REDIS_CACHE_DB>',
                    'compress_data' => '0',
                ],
            ],
        ],
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
];
