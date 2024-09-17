<?php snippet('header') ?>

<main class="flex flex-col">
    <?php snippet('partials/container', slots: true) ?>
    <?php slot('content') ?>
    <div class="flex items-center gap-2">
        <h1 class="text-4xl font-bold">
            <?= page()->title() ?>
        </h1>
    </div>
    <?= page()->main_content()->kt() ?>
    <?php endslot() ?>
    <?php endsnippet() ?>
</main>

<?php snippet('footer') ?>
