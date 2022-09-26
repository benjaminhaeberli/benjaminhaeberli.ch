<?php

return [
    'debug'  => $_ENV['APP_DEBUG'] ?? false,
    'api' => [
        'basicAuth' => true,
        'allowInsecure' => $_ENV['API_ALLOW_INSECURE'] ?? false,
    ],
    'languages' => true,
    'cache' => [
        'pages' => [
            'active' => false
        ]
    ]
];
