<?php
/** @var \Kirby\Cms\StructureObject $item */
$hasDetails = $item->details()->isNotEmpty();
$tag = $item->url()->isNotEmpty() && !$hasDetails ? 'a' : 'div';
$attrs = $item->url()->isNotEmpty() && !$hasDetails ? ' href="' . $item->url() . '" target="_blank"' : '';
$interactive = $item->url()->isNotEmpty() || $hasDetails;
?>
<div class="<?= $hasDetails ? 'card-detail-wrapper' : '' ?> relative">
    <<?= $tag ?><?= $attrs ?> class="card-item flex flex-col gap-1.5 p-4 rounded-lg bg-neutral-600/5 border border-neutral-50/10 <?= $interactive ? 'cursor-pointer hover:bg-neutral-600/15' : '' ?>"<?= $hasDetails ? ' data-card-detail' : '' ?>>
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <?php if ($item->icon()->isNotEmpty()) : ?>
                    <?= icon($item->icon()->value(), ['class' => 'size-4 text-neutral-400']) ?>
                <?php endif ?>
                <h3 class="text-sm font-semibold"><?= $item->name() ?></h3>
            </div>
            <div class="flex items-center gap-2">
                <?php if ($item->label()->isNotEmpty()) : ?>
                    <span class="text-xs font-medium text-neutral-400"><?= $item->label() ?></span>
                <?php endif ?>
                <?php if ($hasDetails) : ?>
                    <?= icon('lucide:chevron-right', ['class' => 'size-3.5 text-neutral-500 card-detail-chevron']) ?>
                <?php endif ?>
            </div>
        </div>
        <?php if ($item->description()->isNotEmpty()) : ?>
            <p class="text-sm text-neutral-400 hyphens-auto"><?= $item->description() ?></p>
        <?php endif ?>
    </<?= $tag ?>>
    <?php if ($hasDetails) : ?>
        <?php snippet('partials/card-detail', ['item' => $item]) ?>
    <?php endif ?>
</div>
