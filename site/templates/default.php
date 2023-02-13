<?php

/** @var HomePage $page */
?>

<?php snippet('header'); ?>
Default
<h1 class="text-lg">
    <?= page()->title() ?>
</h1>
<?= $page->content()->get('pagecontent') ?>
<?= $page->getMeta() ?>

<?php snippet('footer'); ?>