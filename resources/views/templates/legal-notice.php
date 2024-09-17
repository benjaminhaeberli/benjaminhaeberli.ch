<?php snippet('header') ?>

<main class="flex flex-col mt-8 sm:mt-8">

    <?php snippet('partials/container', slots: true) ?>
    <?php slot('content') ?>
    <div class="mb-10">
        <a href="/" class="underline hover:no-underline">Retour à l'accueil</a>
    </div>
    <h1 class="text-4xl font-bold">
        <?= page()->title() ?>
    </h1>
    <div class="bh__kirbytext">
        <?= page()->main_content()->kt() ?>
    </div>
    <?php endslot() ?>
    <?php endsnippet() ?>
</main>

<?php snippet('footer') ?>
