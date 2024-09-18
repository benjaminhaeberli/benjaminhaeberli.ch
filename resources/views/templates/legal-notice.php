<?php snippet('header') ?>

<main class="flex flex-col mt-8 sm:mt-8">

    <?php snippet('partials/container', slots: true) ?>
    <?php slot('content') ?>
    <h1 class="text-xl font-bold sm:text-4xl">
        <?= page()->title() ?>
    </h1>
    <div class="bh__kirbytext">
        <?= page()->main_content()->kt() ?>
    </div>
    <?php endslot() ?>
    <?php endsnippet() ?>
</main>

<?php snippet('footer') ?>
