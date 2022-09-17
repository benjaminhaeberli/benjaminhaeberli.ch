<?php

declare(strict_types=1);


require __DIR__  . '/kirby/bootstrap.php';

/* use DebugBar\StandardDebugBar;

$debugbar = new StandardDebugBar();
$debugbar['time']->startMeasure('kirbycms', 'Kirby CMS');
$debugbarRenderer = $debugbar->getJavascriptRenderer(); */

echo (new Kirby\Cms\App)->render();

/* $debugbar['time']->stopMeasure('kirbycms'); */
/* echo $debugbarRenderer->renderHead();
echo $debugbarRenderer->render(); */
