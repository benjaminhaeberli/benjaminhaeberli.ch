<div class="flex items-center gap-2">
    <h2 class="text-lg font-bold">
        <?= $title ?>
    </h2>
    <?= $logo ?>
</div>
<? if($subtitle): ?>
    <p class="text-md text-neutral-300 pb-4">
        <?= $subtitle ?>
    </p>
<? endif ?>
<?php foreach ($items as $item) : ?>
    <?php snippet('partials/basic-item', ['item' => $item])  ?>
<?php endforeach ?>
