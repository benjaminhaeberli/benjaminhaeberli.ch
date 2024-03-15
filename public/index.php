<?php

include dirname(__DIR__) . '/vendor/autoload.php';

$base = dirname(__DIR__);
$app = $base . '/app';
$storage = $base . '/storage';
$resources = $base . '/resources';

$kirby = new Kirby\Cms\App([
    'roots' => [
        'index'     => __DIR__,
        'base'      => $base,
        'config'    => $base . '/config',
        'languages' => $base . '/lang',
        'site'      => $app,
        'storage'   => $storage,
        'content'   => $storage . '/content',
        'accounts'  => $storage . '/accounts',
        'cache'     => $storage . '/cache',
        'kirby'     => $storage . '/kirby',
        'media'     => $storage . '/media',
        'plugins'   => $storage . '/plugins',
        'sessions'  => $storage . '/sessions',
    ]
]);

echo $kirby->render();
