<div class="flex items-center gap-2">
    <h2 class="text-lg font-bold">
        <?= $title ?>
    </h2>
    <?= $logo ?>
</div>

<?php foreach ($items as $item) : ?>
    <?php snippet('partials/basic-item', ['item' => $item])  ?>
<?php endforeach ?>
