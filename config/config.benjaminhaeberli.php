<?php

header('X-Frame-Options: sameorigin');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');

return [
    'debug'  => false,
    'api' => [
        'allowInsecure' => false,
    ],
    'cache' => [
        'pages' => [
            'active' => true,
        ]
    ]
];
