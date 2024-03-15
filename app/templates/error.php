<?php snippet('header') ?>

<main class="flex flex-col mt-32">
    <?php snippet('blocks/container', slots: true) ?>
    <?php slot('content') ?>
    <div class="flex flex-col max-w-md gap-4 mx-auto mt-8 text-center">
        <h1 class="text-4xl font-bold">
            <?= page()->title() ?>
        </h1>
        <?= page()->message()->kt() ?>
        <div>
            <a href="/" class="underline hover:no-underline ">Retour à l'accueil</a>
        </div>

    </div>
    <?php endslot() ?>
    <?php endsnippet() ?>
</main>

<?php snippet('footer') ?>