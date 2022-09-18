<?php snippet('header') ?>
<?php snippet('debugbar') ?>

<h1>
    <?= page()->title() ?>
</h1>
<?= page()->content()->get('text') ?>

<?php snippet('debugbar-end') ?>
<?php snippet('footer') ?>
