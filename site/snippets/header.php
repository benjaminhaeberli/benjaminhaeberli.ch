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
    <!--  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"> -->
    <?= KirbyAssets::versionedJs('assets/js/scrollreveal.min.js', 'defer') ?>
    <?= KirbyAssets::versionedCss('assets/public.css') ?>
</head>

<body>
    <header class="z-50 w-full max-w-screen-xl px-8 m-auto">
        No header
    </header>