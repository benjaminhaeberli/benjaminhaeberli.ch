<?php

/**
 * Kirby Autoloader
 */
require __DIR__  . '/kirby/bootstrap.php';

/**
 * Loads environment variables from `.env` file
 * @see https://github.com/vlucas/phpdotenv
 */
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/**
 * Launch Kirby
 */
$kirby = new Kirby\Cms\App();
echo $kirby->render();
