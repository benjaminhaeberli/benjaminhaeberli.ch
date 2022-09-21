<?php

require __DIR__  . '/kirby/bootstrap.php';

$kirby = new Kirby\Cms\App();
echo $kirby->render();
