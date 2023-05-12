<?php

header('X-Frame-Options: sameorigin');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');

return [
    'debug'  => false,
    'api' => [
        'basicAuth' => true,
        'allowInsecure' => false,
    ],
    'languages' => true,
    'auth' => [
        'methods' => ['password', 'password-reset']
    ],
    'cache' => [
        'pages' => [
            'active' => true
        ]
    ]
];
