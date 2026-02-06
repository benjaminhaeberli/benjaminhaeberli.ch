<?php

?>

<?php snippet('header') ?>

<main class="flex flex-col mt-8 sm:mt-24">
    <?php snippet('partials/container', slots: true, data: [
        'css' => 'to-reveal', 'gap' => 'gap-6', 'paddingTop' => 'pt-8'
    ]) ?>
    <?php slot('content') ?>
        <div class="flex flex-col gap-2">
            <h1 class="text-xl font-bold sm:text-4xl">
                <?= page()->title() ?>
            </h1>
            <div class="font-medium text-neutral-300">
                <?= page()->accroche()->kt() ?>
            </div>
        </div>
        <hr>
        <div class="flex flex-col gap-2">
            <?php foreach ($page->children()->listed()->flip() as $article) : ?>
                <article class="flex flex-wrap items-center justify-between">
                    <a href="<?= $article->url() ?>" class="hover:underline">
                        <h2><?= $article->title() ?></h2>
                    </a>
                    <span class="text-sm "><?= formatDate($article->publishedAt()->toDate('Y-m-d')) ?></span>
                </article>
            <?php endforeach ?>
        </div>
    <?php endslot() ?>
    <?php endsnippet() ?>
</main>

<?php snippet('footer') ?>
