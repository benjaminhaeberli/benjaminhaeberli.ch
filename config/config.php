<?php

header('X-Frame-Options: sameorigin');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');

return [
    'debug' => true,
    'api' => [
        'basicAuth' => true,
        'allowInsecure' => true,
    ],
    'languages' => true,
    'auth' => [
        'methods' => ['password', 'password-reset'],
    ],
    'cache' => [
        'pages' => [
            'active' => false,
            'type' => 'static',
            'ignore' => fn ($page): bool => $page->template()->name() === 'error',
        ],
    ],
    'routes' => require_once __DIR__.'/routes.php',
];
