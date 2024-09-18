<?php

$rawContent = implode(',', array_values(page()->content('fr')->toArray()));
$word = str_word_count(strip_tags($rawContent));
$minutes = floor($word / 200);
$seconds = floor($word % 200 / (200 / 60));
$readingTime = $minutes . ' minute' . ($minutes == 1 ? '' : 's') . ', ' . $seconds . ' second' . ($seconds == 1 ? '' : 's');


?>

<?php snippet('header') ?>

<main class="flex flex-col mt-8 sm:mt-24">
    <?php snippet('partials/container', slots: true, data: [
        'css' => 'to-reveal', 'gap' => 'gap-6', 'paddingTop' => 'pt-8'
    ]) ?>
        <?php slot('content') ?>
            <article class="flex flex-col gap-8">
                <header class="flex flex-col gap-2 ">
                    <h1 class="text-xl font-bold sm:text-4xl">
                        <?= page()->title() ?>
                    </h1>
                    <div class="flex gap-2 text-sm">
                        <span><?= formatDate(page()->publishedAt()->toDate('Y-m-d')) ?></span>
                        <span>&middot;</span>
                        <span><?= $readingTime ?></span>
                    </div>
                </header>
                <hr>
                <main class="flex flex-col gap-4">
                    <?php foreach (page()->blocks()->toBlocks() as $block): ?>
                    <div id="<?= $block->id() ?>" class="block-type-<?= $block->type() ?>">
                        <?php snippet('blocks/' . $block->type(), ['block' => $block]) ?>
                    </div>
                    <?php endforeach ?>
                </main>
            </article>
            <?= page()->main_content()->kt() ?>
        <?php endslot() ?>
    <?php endsnippet() ?>
</main>

<?php snippet('footer') ?>
