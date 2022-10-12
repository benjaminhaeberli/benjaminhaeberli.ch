<?php

use Kirby\Toolkit\Html;

/**
 * Kirby Autoloader
 */


require __DIR__  . '/kirby/bootstrap.php';

/**
 * Loads environmen🚀t variables from `.env` file
 * @see https://github.com/vlucas/phpdotenv
 */
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/**
 * Launch Kirby
 */
$kirby = new Kirby\Cms\App();
echo $kirby->render();


$benjamin = kirby()->user('RBOctEoR');
dump(array_keys($benjamin->content('fr')->fields()));
