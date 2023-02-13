<?php

use Kirby\Cms\Html;
use Kirby\Cms\Url;

?>
<!DOCTYPE html>
<html lang="<?= kirby()->languageCode() ?>">

<head>
    <base href="<?= site()->url() ?>">
    <link rel="icon" href="<?= Url::to('favicon.svg') ?>">
    <link rel="icon" type="image/x-icon" href="<?= Url::to('favicon.ico') ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <?= Html::css('assets/public.css') ?>
    <title><?= site()->blueprint()->title() ?></title>
</head>

<body>
    <nav class="">
        <ul class="container max-w-screen-xl mx-auto flex py-3 gap-12">
            <li>
                <a href="tel:+796684431" class="flex items-center space-x-2 hover:opacity-60">
                    <svg class=" w-4 h-4 opacity-40 group-hover:opacity-70" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="16" width="16">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span>+41 79 668 44 31</span>
                </a>
            </li>
            <li>
                <a href="mailto:hello@benjaminhaeberli.ch" class="flex items-center space-x-2 text-slate-900 hover:opacity-60">
                    <svg class="w-4 h-4 mt-0.5 opacity-40 group-hover:opacity-70" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="16" width="16">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>hello@benjaminhaeberli.ch</span>
                </a>
            </li>
            <li>
                <a href='/en' class="flex items-center space-x-2 text-slate-900 hover:opacity-60">
                    <svg class="w-4 h-4 mt-0.5 opacity-40 group-hover:opacity-70" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="16" width="16">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                    </svg>
                    <span>English</span>
                </a>
            </li>
        </ul>
    </nav>
    <header class="container max-w-screen-xl mx-auto">

        <li class="flex items-center h-12">
            <span class="relative flex w-4 h-4 mr-2 justify-center items-center">
                <span class="absolute inline-flex w-2 h-2 bg-red-400 rounded-full opacity-75 animate-ping"></span>
                <span class="hidden bg-green-400 bg-green-500 bg-red-400 bg-red-500"></span>
                <span class="relative inline-flex w-2 h-2 bg-red-500 rounded-full"></span>
            </span>
            <p class="flex text-sm font-medium text-red-500 bg-red-50 rounded-full  px-3 hover:bg-red-100">
                <span>Indisponible jusqu'au 1<sup>er</sup> mars 2023</span>
            </p>
        </li>
        <p>Benjamin Haeberli</p>
    </header>