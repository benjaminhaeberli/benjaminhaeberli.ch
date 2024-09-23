<?php

?>
<!DOCTYPE html>
<html lang="<?= kirby()->languageCode() ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <?php snippet('seo/meta') ?>
    <link rel="icon" href="/favicon/favicon.svg">
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg">
    <link rel="icon" type="image/png" href="/favicon/favicon.svg">
    <?= vite(['resources/css/app.css']) ?>
</head>
<header class="flex flex-col justify-center gap-2 px-4 pt-16 mx-auto max-w-screen-xs sm:px-0">
    <nav class="flex justify-center hidden gap-4 px-4 mx-auto w-fit rounded-xl">
        <?php foreach (site()->navigation()->toPages() as $page) { ?>
            <div class="flex flex-col group">
                <a href="<?= $page->url() ?>" class="py-2 px-2 flex gap-4 items-center <?= ! $page->isActive() ?: 'font-semibold' ?>">
                    <span><?= $page->title() ?></span>
                </a>
                <span class="w-full h-[0.125rem] group-hocus:bg-slate-50 <?= ! $page->isActive() ?: 'bg-slate-50' ?>"></span>
            </div>
        <?php } ?>
    </nav>
    <?php if (kirby()->user()?->isAdmin()) { ?>
        <div class="text-xs text-center">
            <a href="<?= url('panel')  ?>" target="_blank">
                Accéder au panel
            </a>
        </div>
    <?php } ?>
</header>

<body>
