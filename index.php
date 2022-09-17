<?php

declare(strict_types=1);

define('KIRBY_HELPER_DUMP', false);

require __DIR__  . '/kirby/bootstrap.php';

$kirby = new Kirby\Cms\App();

if (str_starts_with(kirby()->path(), 'panel/')) {
    $debugbar = new DebugBar\StandardDebugBar();
    $debugbar['time']->startMeasure('kirbycms', 'Kirby CMS');
    $debugbarRenderer = $debugbar->getJavascriptRenderer();
}

echo $kirby->render();

if (str_starts_with(kirby()->path(), 'panel/')) {
    $debugbar['time']->stopMeasure('kirbycms');
    echo $debugbarRenderer->renderHead();
    echo $debugbarRenderer->render();
}
