<?php

declare(strict_types=1);

define('KIRBY_HELPER_DUMP', false);

require __DIR__  . '/kirby/bootstrap.php';

$debugbar = new DebugBar\StandardDebugBar();
$debugbar['time']->startMeasure('kirbycms', 'Kirby CMS');
$debugbarRenderer = $debugbar->getJavascriptRenderer();

echo (new Kirby\Cms\App)->render();

ray('e');
$debugbar['time']->stopMeasure('kirbycms');
echo $debugbarRenderer->renderHead();
echo $debugbarRenderer->render();
