<?php

declare(strict_types=1);

define('KIRBY_HELPER_DUMP', false);

require __DIR__  . '/kirby/bootstrap.php';

$kirby = new Kirby\Cms\App();
echo $kirby->render();
