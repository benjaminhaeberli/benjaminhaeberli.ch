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
    <header class="max-w-screen-lg mx-auto mb-8">
        <nav class="container flex justify-between max-w-screen-lg px-4 mx-auto text-sm text-slate-50 bg-slate-900">
            <ul class="flex gap-6 py-3">
                <li>
                    <a href='<?= site()->github() ?>' target="_blank" class="flex items-center gap-1 group hover:text-slate-300 focus:outline-dashed outline-1 outline-offset-2">
                        <svg class="w-4 h-4 fill-slate-50 group-hover:fill-slate-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M12 2C6.475 2 2 6.475 2 12a9.994 9.994 0 0 0 6.838 9.488c.5.087.687-.213.687-.476 0-.237-.013-1.024-.013-1.862-2.512.463-3.162-.612-3.362-1.175-.113-.288-.6-1.175-1.025-1.413-.35-.187-.85-.65-.013-.662.788-.013 1.35.725 1.538 1.025.9 1.512 2.338 1.087 2.912.825.088-.65.35-1.087.638-1.337-2.225-.25-4.55-1.113-4.55-4.938 0-1.088.387-1.987 1.025-2.688-.1-.25-.45-1.275.1-2.65 0 0 .837-.262 2.75 1.026a9.28 9.28 0 0 1 2.5-.338c.85 0 1.7.112 2.5.337 1.912-1.3 2.75-1.024 2.75-1.024.55 1.375.2 2.4.1 2.65.637.7 1.025 1.587 1.025 2.687 0 3.838-2.337 4.688-4.562 4.938.362.312.675.912.675 1.85 0 1.337-.013 2.412-.013 2.75 0 .262.188.574.688.474A10.016 10.016 0 0 0 22 12c0-5.525-4.475-10-10-10z" />
                        </svg>
                        <span>GitHub</span>
                    </a>
                </li>
                <li>
                    <a href='<?= site()->linkedin() ?>' target="_blank" class="flex items-center gap-1 group hover:text-slate-300 focus:outline-dashed outline-1 outline-offset-2">
                        <svg class="w-4 h-4 fill-slate-50 group-hover:fill-slate-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 0 1-1.548-1.549 1.548 1.548 0 1 1 1.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z" />
                        </svg>
                        <span>LinkedIn</span>
                    </a>
                </li>
                <li>
                    <a href="mailto:<?= site()->email() ?>" class="flex items-center gap-1 group hover:text-slate-300 focus:outline-dashed outline-1 outline-offset-2">
                        <svg class="w-4 h-4 stroke-2 stroke-slate-50 group-hover:stroke-slate-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <span><?= site()->email() ?></span>
                    </a>
                </li>
            </ul>
            <ul class="flex gap-4 py-3 ">
                <li class="flex">
                    <a href='/en' class="flex items-center gap-1 group hover:text-slate-300 focus:outline-dashed outline-1 outline-offset-2">
                        <svg class="w-4 h-4 stroke-2 stroke-slate-50 group-hover:stroke-slate-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                        </svg>
                        <span>English version</span>
                    </a>
                </li>
                <li class="flex">
                    <div href="https://tally.so/r/mJDQXw" target="_blank" class="flex items-center gap-1 group focus:outline-dashed outline-1 outline-offset-2">
                        <span class="relative flex items-center justify-center w-4 h-4" aria-hidden="true">
                            <span class="absolute inline-flex w-2 h-2 bg-red-400 rounded-full opacity-75 animate-ping"></span>
                            <span class="relative inline-flex w-2 h-2 bg-red-500 rounded-full"></span>
                        </span>
                        <span>Indisponible jusqu'au 1<sup>er</sup> août 2023</span>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="flex flex-col gap-2 p-4 border-2 border-gray-900 text-slate-900">
            <nav class="container flex max-w-screen-xl mx-auto font-medium ">
                <ul class="flex gap-2">
                    <li class="flex">
                        <a href="#" class="flex items-center gap-2 px-2 py-2 group focus:bg-transparent text-slate-100 bg-slate-900 hover:bg-slate-800 focus:text-slate-900 focus:outline-dashed outline-2 ">
                            <svg class="w-6 h-6 stroke-1.8 fill-slate-100 group-focus:fill-slate-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                                <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                            </svg>
                            <span>Accueil</span>
                        </a>
                    </li>
                    <li class="flex">
                        <a href="/methodologie" class="flex items-center gap-2 px-2 py-2 group focus:bg-transparent hocus:text-slate-900 focus:outline-dashed outline-2 ">
                            <svg class="w-6 h-6 stroke-1.8 fill-slate-900 group-hocus:fill-slate-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z" clip-rule="evenodd" />
                                <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
                            </svg>
                            <span>Méthodologie</span>
                        </a>
                    </li>
                    <li class="flex">
                        <a href="/eco-conception" class="flex items-center gap-2 px-2 py-2 group focus:bg-transparent hocus:text-slate-900 focus:outline-dashed outline-2 ">
                            <svg class="w-6 h-6 stroke-1.8 fill-slate-900 group-hocus:fill-slate-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM8.547 4.505a8.25 8.25 0 1011.672 8.214l-.46-.46a2.252 2.252 0 01-.422-.586l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.211.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.654-.261a2.25 2.25 0 01-1.384-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.279-2.132z" clip-rule="evenodd" />
                            </svg>
                            <span>Éco-conception</span>
                        </a>
                    </li>
                    <li class="flex">
                        <a href="/experience" class="flex items-center gap-2 px-2 py-2 group focus:bg-transparent hocus:text-slate-900 focus:outline-dashed outline-2">
                            <svg class="w-6 h-6 stroke-1.8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                            <span>Expérience</span>
                        </a>
                    </li>
                    <li class="flex">
                        <a href="/blog" class="flex items-center gap-2 px-2 py-2 group focus:bg-transparent hocus:text-slate-900 focus:outline-dashed outline-2">
                            <svg class="w-6 h-6 stroke-1.8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                            </svg>
                            <span>Blog</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="container flex max-w-screen-xl mx-auto font-medium text-slate-600">
                <ul class="flex gap-4 py-1 text-sm">
                    <li class="flex ">
                        <a href="#introduction" class="flex items-center px-1 focus:outline-slate-900 outline-slate-300 outline-dotted outline-2 outline-offset-2 hocus:text-slate-900">
                            Intro
                        </a>
                    </li>
                    <li class="flex ">
                        <a href="#competences" class="flex items-center px-1 focus:outline-slate-900 outline-slate-300 outline-dotted outline-2 outline-offset-2 hocus:text-slate-900">
                            Compétences
                        </a>
                    </li>
                    <li class="flex ">
                        <a href="#tarifs" class="flex items-center px-1 focus:outline-slate-900 outline-slate-300 outline-dotted outline-2 outline-offset-2 hocus:text-slate-900">
                            Tarifs
                        </a>
                    </li>
                    <li class="flex ">
                        <a href="#avis-clients" class="flex items-center px-1 focus:outline-slate-900 outline-slate-300 outline-dotted outline-2 outline-offset-2 hocus:text-slate-900">
                            Avis client·e·s
                        </a>
                    </li>
                    <li class="flex ">
                        <a href="#foire-aux-questions" class="flex items-center px-1 focus:outline-slate-900 outline-slate-300 outline-dotted outline-2 outline-offset-2 hocus:text-slate-900">
                            Foire aux questions
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </header>
