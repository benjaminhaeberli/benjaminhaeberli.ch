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
        <nav class="flex flex-wrap items-center justify-center gap-2 mx-auto my-3 text-sm md:justify-between">
            <ol class="flex flex-wrap gap-x-6 gap-y-2">
                <li>
                    <a href='<?= site()->github() ?>' target="_blank" class="flex items-center gap-1 group text-zinc-400 hover:text-zinc-100 focus:outline-dashed outline-1 outline-offset-2">
                        <svg class="w-4 h-4 fill-zinc-400 group-hover:fill-zinc-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M12 2C6.475 2 2 6.475 2 12a9.994 9.994 0 0 0 6.838 9.488c.5.087.687-.213.687-.476 0-.237-.013-1.024-.013-1.862-2.512.463-3.162-.612-3.362-1.175-.113-.288-.6-1.175-1.025-1.413-.35-.187-.85-.65-.013-.662.788-.013 1.35.725 1.538 1.025.9 1.512 2.338 1.087 2.912.825.088-.65.35-1.087.638-1.337-2.225-.25-4.55-1.113-4.55-4.938 0-1.088.387-1.987 1.025-2.688-.1-.25-.45-1.275.1-2.65 0 0 .837-.262 2.75 1.026a9.28 9.28 0 0 1 2.5-.338c.85 0 1.7.112 2.5.337 1.912-1.3 2.75-1.024 2.75-1.024.55 1.375.2 2.4.1 2.65.637.7 1.025 1.587 1.025 2.687 0 3.838-2.337 4.688-4.562 4.938.362.312.675.912.675 1.85 0 1.337-.013 2.412-.013 2.75 0 .262.188.574.688.474A10.016 10.016 0 0 0 22 12c0-5.525-4.475-10-10-10z" />
                        </svg>
                        <span>GitHub</span>
                    </a>
                </li>
                <li>
                    <a href='<?= site()->linkedin() ?>' target="_blank" class="flex items-center gap-1 group text-zinc-400 hover:text-zinc-100 focus:outline-dashed outline-1 outline-offset-2">
                        <svg class="w-4 h-4 fill-zinc-400 group-hover:fill-zinc-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 0 1-1.548-1.549 1.548 1.548 0 1 1 1.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z" />
                        </svg>
                        <span>LinkedIn</span>
                    </a>
                </li>
                <li>
                    <a href="mailto:<?= site()->email() ?>  " class="flex items-center gap-1 group text-zinc-400 hover:text-zinc-100 focus:outline-dashed outline-1 outline-offset-2">
                        <svg class="w-4 h-4 stroke-2 stroke-zinc-400 group-hover:stroke-zinc-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <span><?= site()->email() ?></span>
                    </a>
                </li>
            </ol>
            <ol class="flex gap-4">
                <?php /* snippet('langswitch') */ ?>
                <li class="flex">
                    <div class="flex items-center gap-1 group focus:outline-dashed outline-1 outline-offset-2">
                        <span class="relative flex items-center justify-center w-4 h-4" aria-hidden="true">
                            <span class="absolute inline-flex w-2 h-2 bg-green-600 rounded-full opacity-75 animate-ping"></span>
                            <span class="relative inline-flex w-2 h-2 bg-green-600 rounded-full"></span>
                        </span>
                        <span class="px-2 py-1 text-green-500 rounded-full bg-green-500/10 ring-1 ring-inset ring-green-500/20">Disponible en ce moment !</span>
                    </div>
                </li>
            </ol>
        </nav>
        <?php snippet('megamenu') ?>
    </header>
