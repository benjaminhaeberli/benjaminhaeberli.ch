<?php
/** @var \Kirby\Cms\StructureObject $item */
?>
<div class="card-detail-popup">
    <?php if ($image = $item->cover_image()->toFile()) : ?>
        <div class="card-detail-banner">
            <img src="<?= $image->url() ?>" alt="<?= $item->name() ?>" loading="lazy">
        </div>
    <?php endif ?>
    <div class="card-detail-body">
        <div class="flex items-center justify-between">
            <div class="group flex items-center gap-2">
                <?php if ($item->icon()->isNotEmpty()) : ?>
                    <?= icon($item->icon()->value(), ['class' => 'size-4 text-neutral-400 group-hocus:text-white transition-colors']) ?>
                <?php endif ?>
                <?php if ($item->url()->isNotEmpty()) : ?>
                    <a href="<?= $item->url() ?>" target="_blank" class="text-sm font-semibold hocus:underline" data-card-detail-link><?= $item->name() ?></a>
                <?php else : ?>
                    <h4 class="text-sm font-semibold"><?= $item->name() ?></h4>
                <?php endif ?>
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
