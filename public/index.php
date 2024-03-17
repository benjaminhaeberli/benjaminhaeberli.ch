<?php

include dirname(__DIR__) . '/vendor/autoload.php';

$base = dirname(__DIR__);
$app = $base . '/app';
$storage = $base . '/storage';
$views = $base . '/resources/views';

$kirby = new Kirby\Cms\App([
    'roots' => [
        'index'     => __DIR__,
        'site'      => $app,
        'base'      => $base,
        'config'    => $base . '/config',
        'languages' => $base . '/lang',
        'snippets'  => $views . '/snippets',
        'templates'  => $views . '/templates',
        'storage'   => $storage,
        'license'   => $storage . '.license',
        'accounts'  => $storage . '/accounts',
        'cache'     => $storage . '/cache',
        'content'   => $storage . '/content',
        'kirby'     => $storage . '/kirby',
        'plugins'   => $storage . '/plugins',
        'sessions'  => $storage . '/sessions',
    ]
]);

echo $kirby->render();
