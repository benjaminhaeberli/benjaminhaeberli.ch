<?php

?>

<?php snippet('header') ?>

<main class="flex flex-col">
    <?php snippet('partials/container', slots: true) ?>
        <?php slot('content') ?>
            <div class="flex flex-col gap-2">
                <h1 class="text-3xl font-bold">
                    <?= page()->title() ?>
                </h1>
                <?php foreach (page()->blocks()->toBlocks() as $block): ?>
                <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
                    <?php snippet('blocks/' . $block->type(), [
                        'block' => $block,
                        'theme' => 'dark'
                    ]) ?>
                </div>
                <?php endforeach ?>
            </div>
            <?= page()->main_content()->kt() ?>
        <?php endslot() ?>
    <?php endsnippet() ?>
</main>

<?php snippet('footer') ?>
