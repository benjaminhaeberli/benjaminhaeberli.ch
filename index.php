<?php

/**
 * Kirby Autoloader
 */
require __DIR__  . '/kirby/bootstrap.php';

/**
 * Launch Kirby
 */
$kirby = new Kirby\Cms\App();
echo $kirby->render();
