
<div class="flex flex-col gap-0 text-sm break-words sm:gap-1 sm:flex-row">
    <span>
        <?= $item->name() ?>
    </span>
    <span class="hidden text-slate-400 sm:block">&middot;</span>
    <?php if($item->description()->value) : ?>
        <div class="text-slate-400">
            <?= $item->description() ?>
        </div>
    <?php endif ?>
</div>

