<?php

return [
    'debug'  => (bool) $_ENV['APP_DEBUG'] ?? false,
    'api' => [
        'basicAuth' => true,
        'allowInsecure' => (bool) $_ENV['API_ALLOW_INSECURE'] ?? false,
    ],
    'languages' => true,
    'cache' => [
        'pages' => [
            'active' => false
        ]
    ]
];
