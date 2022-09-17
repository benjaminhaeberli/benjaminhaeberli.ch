<?php

require 'kirby/bootstrap.php';

$kirby = new Kirby\Cms\App([
    'roots' => [
        'index'   => __DIR__,
        'config' =>  __DIR__ . '/config',
        'site'    => __DIR__ . '/site',
        'content' => __DIR__ . '/content'
    ]
]);

echo $kirby->render();
