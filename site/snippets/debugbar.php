<?php

$debugbar = new DebugBar\StandardDebugBar();
$debugbar['time']->startMeasure('kirbycms', 'Kirby CMS');

/** @var DebugBar\JavascriptRenderer */
$debugbarRenderer = $debugbar->getJavascriptRenderer();
kirby()->session()->data()->set('debugbar', $debugbarRenderer);
