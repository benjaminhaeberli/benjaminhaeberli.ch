<?php

use Kirby\Cms\Url;

?>
<!DOCTYPE html>
<html lang="<?= kirby()->languageCode() ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <?= snippet('seo/meta') ?>
    <link rel="icon" href="<?= Url::to('/public/favicon/favicon.svg') ?>">
    <link rel="icon" type="image/svg+xml" href="<?= Url::to('/public/favicon/favicon.svg') ?>">
    <link rel="icon" type="image/png" href="<?= Url::to('/public/favicon/favicon.png') ?>">
    <?= vite(['resources/css/app.css']) ?>
    <script type="module">
        import {
            codeToHtml
        } from 'https://esm.sh/shiki@1.1.7'

        document.querySelectorAll('.shiki').forEach(async (el) => {
            el.innerHTML = await codeToHtml(el.innerHTML, {
                lang: el.getAttribute('data-lang'),
                theme: 'rose-pine'
            })
        })
    </script>
</head>

<body>