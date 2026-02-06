<?php
/** @var \Kirby\Cms\StructureObject $item */
?>
<div class="card-detail-popup">
    <?php if ($item->cover_image()->isNotEmpty()) : ?>
        <div class="card-detail-banner">
            <img src="<?= $item->cover_image() ?>" alt="<?= $item->name() ?>" loading="lazy">
        </div>
    <?php endif ?>
    <div class="card-detail-body">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <?php if ($item->icon()->isNotEmpty()) : ?>
                    <?= icon($item->icon()->value(), ['class' => 'size-4 text-neutral-400']) ?>
                <?php endif ?>
                <h4 class="text-sm font-semibold"><?= $item->name() ?></h4>
            </div>
            <?php if ($item->label()->isNotEmpty()) : ?>
                <span class="text-xs font-medium text-neutral-400"><?= $item->label() ?></span>
            <?php endif ?>
        </div>
        <?php if ($item->details()->isNotEmpty()) : ?>
            <div class="bh__kirbytext">
                <?= $item->details()->kirbytext() ?>
            </div>
        <?php endif ?>
    </div>
</div>
