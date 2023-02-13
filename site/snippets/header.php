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
    <?php site()->blueprint()->field('address') ?>
    Inter, Jost, Wotfard, Libre Baskerville, Helvetica, Verdana
    <div>
        <ul>
            <li>
                <a href="<?= site()->url() ?>">
                    <?= page()->title() ?>
                </a>
            </li>
        </ul>
    </div>

    <header class="">
        <ul class="c-topbar mt-3 md:mt-0">
            <li class="flex items-center h-12 -my-6 lg:hidden md:my-auto md:h-auto">
                <span class="relative flex w-4 h-4 mr-2 justify-center items-center">
                    <span class="absolute inline-flex w-2 h-2 bg-red-400 rounded-full opacity-75 animate-ping"></span>
                    <span class="hidden bg-green-400 bg-green-500 bg-red-400 bg-red-500"></span>
                    <span class="relative inline-flex w-2 h-2 bg-red-500 rounded-full"></span>
                </span>Niet beschikbaar
            </li>
            <li>
                <a href="tel:+31620842105" class="flex items-center space-x-2 group text-slate-900 hover:text-sky-500 h-12 -my-6 md:my-auto md:h-auto">
                    <svg class="w-4 h-4 opacity-40 group-hover:opacity-70" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="16" width="16">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span>06 208 42 105</span>
                </a>
            </li>
            <li>
                <a href="mailto:mail@andrejilderda.nl" class="flex items-center space-x-2 group hover:text-rose-500 h-12 -my-6 md:my-auto md:h-auto">
                    <svg class="w-4 h-4 mt-0.5 opacity-40 group-hover:opacity-70" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="16" width="16">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>mail@andrejilderda.nl</span>
                </a>
            </li>
            <li>
                <button type="button" class="flex items-center space-x-2 group hover:text-green-400 h-12 -my-6 md:my-auto md:h-auto">
                    <svg class="w-4 h-4 mt-0.5 opacity-40 group-hover:opacity-70" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="16" width="16">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                    </svg>
                    <span>English</span>
                </button>
            </li>
        </ul>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-wrap items-center justify-center sm:justify-between lg:flex-nowrap">
            <div class="mt-10 lg:mt-0 lg:grow lg:basis-0">
                <p>Benjamin Haeberli</p>
            </div>
            <div class="order-first -mx-4 flex flex-auto basis-full overflow-x-auto whitespace-nowrap border-b border-blue-600/10 py-4 font-mono text-sm text-blue-600 sm:-mx-6 lg:order-none lg:mx-0 lg:basis-auto lg:border-0 lg:py-0">
                <div class="mx-auto flex items-center gap-4 px-4">
                    <p><time datetime="2022-04-04">04</time>-<time datetime="2022-04-06">06 of April, 2022</time></p><svg aria-hidden="true" viewBox="0 0 6 6" class="h-1.5 w-1.5 overflow-visible fill-current stroke-current">
                        <path d="M3 0L6 3L3 6L0 3Z" stroke-width="2" stroke-linejoin="round"></path>
                    </svg>
                    <p>Suisse, Europe</p>
                </div>
            </div>
            <div class="hidden sm:mt-10 sm:flex lg:mt-0 lg:grow lg:basis-0 lg:justify-end"><a class="inline-flex justify-center rounded-2xl bg-blue-600 p-4 text-base font-semibold text-white hover:bg-blue-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70" href="/#">Get your tickets</a></div>
        </div>
    </header>