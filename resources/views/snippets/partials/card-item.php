<?php
/** @var \Kirby\Cms\StructureObject $item */
$tag = $item->url()->isNotEmpty() ? 'a' : 'div';
$attrs = $item->url()->isNotEmpty() ? ' href="' . $item->url() . '" target="_blank"' : '';
?>
<<?= $tag ?><?= $attrs ?> class="flex flex-col gap-1.5 p-4 rounded-lg bg-neutral-600/5 border border-neutral-50/10 <?= $item->url()->isNotEmpty() ? 'cursor-pointer hover:bg-neutral-600/15' : '' ?>">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
            <?php if ($item->icon()->isNotEmpty()) : ?>
                <?= icon($item->icon()->value(), ['class' => 'size-4 text-neutral-400']) ?>
            <?php endif ?>
            <h3 class="text-sm font-semibold"><?= $item->name() ?></h3>
        </div>
        <?php if ($item->label()->isNotEmpty()) : ?>
            <span class="text-xs font-medium text-neutral-400"><?= $item->label() ?></span>
        <?php endif ?>
    </div>
    <?php if ($item->description()->isNotEmpty()) : ?>
        <p class="text-sm text-neutral-400 hyphens-auto"><?= $item->description() ?></p>
    <?php endif ?>
</<?= $tag ?>>
