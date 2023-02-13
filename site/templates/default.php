<?php

/** @var HomePage $page */
?>

<?php snippet('header'); ?>
Default
<h1>
    <?= page()->title() ?>
</h1>
<?= $page->content()->get('pagecontent') ?>
<?= $page->getMeta() ?>

<?php snippet('footer'); ?>