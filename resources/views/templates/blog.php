<?php


$highlighter = new \Tempest\Highlight\Highlighter();
$code = $highlighter->parse("<?php echo 'Test' ?>", 'php');

?>

<?php snippet('header') ?>

<main class="flex flex-col mt-8 sm:mt-24">
    <?php snippet('blocks/container', slots: true, data: [
        'css' => 'to-reveal', 'paddingTop' => 'pt-8', 'gap' => 'gap-6'
    ]) ?>
    <?php slot('content') ?>
    <div class="flex flex-col gap-2">
        <h1 class="text-xl font-bold sm:text-3xl">
            <?= page()->title() ?>
        </h1>
        <div class="font-medium text-slate-300">
            <?= page()->accroche()->kt() ?>
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <?php foreach ($page->children()->listed()->flip() as $article) : ?>
            <article class="flex items-center justify-between">
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