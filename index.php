<?php

require 'kirby/bootstrap.php';

use DebugBar\StandardDebugBar;

$debugbar = new StandardDebugBar();
$debugbar['time']->startMeasure('kirbycms', 'Kirby CMS');
$debugbarRenderer = $debugbar->getJavascriptRenderer();

$kirby = new Kirby\Cms\App([
    'roots' => [
        'index'   => __DIR__,
        'config' =>  __DIR__ . '/config',
        'site'    => __DIR__ . '/site',
        'content' => __DIR__ . '/content'
    ]
]);
echo $kirby->render();

$debugbar['time']->stopMeasure('kirbycms');
echo $debugbarRenderer->renderHead();
echo $debugbarRenderer->render();
