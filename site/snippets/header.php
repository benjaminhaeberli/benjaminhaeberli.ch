<?php

use BenjaminHaeberli\Portfolio\KirbyAssets;
use Kirby\Cms\Url;

?>
<!DOCTYPE html>
<html lang="<?= kirby()->languageCode() ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <?= snippet('seo/meta') ?>
    <link rel="icon" href="<?= Url::to('assets/favicon/favicon.svg') ?>">
    <link rel="icon" type="image/svg+xml" href="<?= Url::to('/assets/favicon/favicon.svg') ?>">
    <link rel="icon" type="image/png" href="<?= Url::to('/assets/favicon/favicon.png') ?>">
    <?= KirbyAssets::versionedJs('assets/js/scrollreveal.min.js') ?>
    <?= KirbyAssets::versionedCss('assets/public.css') ?>
</head>

<body>