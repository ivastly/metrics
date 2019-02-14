<?php

return [
    'settings' => [
        'displayErrorDetails' => true,
        'mysql' => [
            'host' => 'mysql',
            'database' => 'todo',
            'user' => 'root',
        ],
        'redis' => [
            'host' => 'redis',
        ],
    ],
    'routes' => require_once __DIR__ . '/routes.php',
];