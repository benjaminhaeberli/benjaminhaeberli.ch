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
    <header class="max-w-screen-xl mx-auto mb-8 pb-6 border-dashed border-b-2">
        <nav class=" container max-w-screen-xl mx-auto flex justify-between text-slate-600">
            <ul class="flex py-3 gap-6">
                <li>
                    <a href='https://www.linkedin.com/in/benjaminhaeberli/' target="_blank" class="flex group items-center gap-1 hover:text-slate-900 focus:outline-dashed outline-1 outline-offset-2">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path class="fill-slate-600" d="M12 2C6.475 2 2 6.475 2 12a9.994 9.994 0 0 0 6.838 9.488c.5.087.687-.213.687-.476 0-.237-.013-1.024-.013-1.862-2.512.463-3.162-.612-3.362-1.175-.113-.288-.6-1.175-1.025-1.413-.35-.187-.85-.65-.013-.662.788-.013 1.35.725 1.538 1.025.9 1.512 2.338 1.087 2.912.825.088-.65.35-1.087.638-1.337-2.225-.25-4.55-1.113-4.55-4.938 0-1.088.387-1.987 1.025-2.688-.1-.25-.45-1.275.1-2.65 0 0 .837-.262 2.75 1.026a9.28 9.28 0 0 1 2.5-.338c.85 0 1.7.112 2.5.337 1.912-1.3 2.75-1.024 2.75-1.024.55 1.375.2 2.4.1 2.65.637.7 1.025 1.587 1.025 2.687 0 3.838-2.337 4.688-4.562 4.938.362.312.675.912.675 1.85 0 1.337-.013 2.412-.013 2.75 0 .262.188.574.688.474A10.016 10.016 0 0 0 22 12c0-5.525-4.475-10-10-10z" />
                        </svg>
                        <span>GitHub</span>
                    </a>
                </li>
                <li>
                    <a href='https://www.linkedin.com/in/benjaminhaeberli/' target="_blank" class="flex group items-center gap-1 hover:text-slate-900 focus:outline-dashed outline-1 outline-offset-2">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path class="fill-slate-600" d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 0 1-1.548-1.549 1.548 1.548 0 1 1 1.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z" />
                        </svg>
                        <span>LinkedIn</span>
                    </a>
                </li>
                <li>
                    <a href="mailto:hello@benjaminhaeberli.ch" class="flex group items-center gap-1 hover:text-slate-900 focus:outline-dashed outline-1 outline-offset-2">
                        <svg class="w-4 h-4 stroke-2 stroke-slate-600 group-hover:stroke-slate-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                            <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                        </svg>
                        <span>hello@benjaminhaeberli.ch</span>
                    </a>
                </li>
            </ul>
            <ul class="flex py-3 gap-4 text-sm">
                <li class="flex">
                    <a href='/en' class="flex group items-center gap-1 hover:text-slate-900 focus:outline-dashed outline-1 outline-offset-2">
                        <svg class="w-4 h-4 stroke-2 stroke-slate-600 group-hover:stroke-slate-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                        </svg>
                        <span>View this in English</span>
                    </a>
                </li>
                <li class="flex">
                    <a href="https://tally.so/r/mJDQXw" target="_blank" class="flex group items-center gap-1 focus:outline-dashed outline-1 outline-offset-2">
                        <span class="relative flex w-4 h-4 justify-center items-center" aria-hidden="true">
                            <span class="absolute inline-flex w-2 h-2 bg-cyan-400 rounded-full opacity-75 animate-ping"></span>
                            <span class="relative inline-flex w-2 h-2 bg-cyan-500 rounded-full"></span>
                        </span>
                        <div class="flex px-3 py-1 rounded-full text-cyan-700 bg-cyan-100 group-hover:bg-cyan-100/60">
                            <span>Disponible dès le 1<sup>er</sup> avril 2023</span>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
        <nav class="container max-w-screen-xl mx-auto flex text-slate-700 font-bold">
            <ul class="flex py-3 gap-3">
                <li class="flex">
                    <a href="#" class="flex group items-center gap-2 rounded-full px-4 py-2 focus:bg-transparent text-slate-100 bg-slate-900 hover:bg-slate-800 focus:text-slate-900 focus:outline-dashed outline-2 outline-offset-2">
                        <svg class="w-6 h-6 stroke-2 fill-slate-100 group-focus:fill-slate-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                            <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                        </svg>
                        <span>Accueil</span>
                    </a>
                </li>
                <li class="flex">
                    <a href="#" class="flex group items-center gap-2 rounded-full px-4 py-2 focus:bg-transparent hocus:text-slate-900 focus:outline-dashed outline-2 outline-offset-2">
                        <svg class="w-6 h-6 stroke-2 fill-slate-700 group-hocus:fill-slate-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 016.775-5.025.75.75 0 01.313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 011.248.313 5.25 5.25 0 01-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 112.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0112 6.75zM4.117 19.125a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z" clip-rule="evenodd" />
                            <path d="M10.076 8.64l-2.201-2.2V4.874a.75.75 0 00-.364-.643l-3.75-2.25a.75.75 0 00-.916.113l-.75.75a.75.75 0 00-.113.916l2.25 3.75a.75.75 0 00.643.364h1.564l2.062 2.062 1.575-1.297z" />
                            <path fill-rule="evenodd" d="M12.556 17.329l4.183 4.182a3.375 3.375 0 004.773-4.773l-3.306-3.305a6.803 6.803 0 01-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 00-.167.063l-3.086 3.748zm3.414-1.36a.75.75 0 011.06 0l1.875 1.876a.75.75 0 11-1.06 1.06L15.97 17.03a.75.75 0 010-1.06z" clip-rule="evenodd" />
                        </svg>
                        <span>Compétences</span>
                    </a>
                </li>
                <li class="flex">
                    <a href="#" class="flex group items-center gap-2 rounded-full px-4 py-2 focus:bg-transparent hocus:text-slate-900 focus:outline-dashed outline-2 outline-offset-2">
                        <svg class="w-6 h-6 stroke-2 fill-slate-700 group-hocus:fill-slate-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM8.547 4.505a8.25 8.25 0 1011.672 8.214l-.46-.46a2.252 2.252 0 01-.422-.586l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.211.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.654-.261a2.25 2.25 0 01-1.384-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.279-2.132z" clip-rule="evenodd" />
                        </svg>
                        <span>Éco-conception</span>
                    </a>
                </li>
                <li class="flex">
                    <a href="#" class="flex group items-center gap-2 rounded-full px-4 py-2 focus:bg-transparent hocus:text-slate-900 focus:outline-dashed outline-2 outline-offset-2">
                        <svg class="w-6 h-6 stroke-2 fill-slate-700 group-hocus:fill-slate-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 01-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 01-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 01-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584zM12 18a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                        </svg>
                        <span>FAQ</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>