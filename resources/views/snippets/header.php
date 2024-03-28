<?php

use Kirby\Cms\Auth;

?>
<!DOCTYPE html>
<html lang="<?= kirby()->languageCode() ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <?= snippet('seo/meta') ?>
    <link rel="icon" href="/favicon/favicon.svg">
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg">
    <link rel="icon" type="image/png" href="/favicon/favicon.svg">
    <?= vite(['resources/css/app.css']) ?>
</head>
<header class="flex flex-col justify-center px-4 pt-16 mx-auto max-w-screen-xs sm:px-0">
    <nav class="flex justify-center gap-4">
        <?php foreach (site()->navigation()->toPages() as $page) : ?>
            <div>
                <a href="<?= $page->url() ?>" class="<?= $page->isActive() ? 'font-bold' : 'hover:underline' ?>">
                    <?= $page->title() ?>
                </a>
            </div>
        <?php endforeach; ?>
    </nav>
    <div id="temporary_translator"></div>
    <?php if (kirby()->user()->isAdmin()) : ?>
        <div class="text-xs text-center">
            <a href="<?= url('panel')  ?>" target="_blank">
                Accéder au panel
            </a>
        </div>
    <?php endif; ?>
</header>

<body>