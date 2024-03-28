<?php


$highlighter = new \Tempest\Highlight\Highlighter();
$code = $highlighter->parse("<?php echo 'Test' ?>", 'php');

?>

<?php snippet('header') ?>

<main class="flex flex-col">
    <?php snippet('blocks/container', slots: true) ?>
    <?php slot('content') ?>
    <div class="flex items-center gap-2">
        <h1 class="text-3xl font-bold">
            <?= page()->title() ?>
            <pre class="text-sm bg-slate-900"><code><?= $code ?></code></pre>
        </h1>
    </div>
    <?= page()->main_content()->kt() ?>
    <?php endslot() ?>
    <?php endsnippet() ?>
</main>

<?php snippet('footer') ?>