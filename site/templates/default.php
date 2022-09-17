<?php snippet('header') ?>

<h1>
    <?= page()->title() ?>
</h1>
<?= page()->content()->get('text') ?>

<?php snippet('footer') ?>
