<?php

/** @var HomePage $page */
?>

<?php snippet('header'); ?>
Default

<?= $page->content()->get('pagecontent') ?>
<?= $page->getMeta() ?>

<?php snippet('footer'); ?>