<?php

/** @var HomePage $page */
$content = $page->content();
?>

<?php snippet('header'); ?>
Default

<?= $content->get('pagecontent') ?>
<?= $page->getMeta() ?>

<?php snippet('footer'); ?>
