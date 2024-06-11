<div class="flex flex-col gap-1 text-sm">
    <div class="flex flex-col items-start gap-1 sm:items-center sm:flex-row">
        <div>
            <a href="<?= $item->url() ?>" target="_blank" class="hover:underline">
                <?= $item->name() ?>
            </a>
        </div>
        <span class="hidden text-slate-400 sm:block">·</span>
        <div class="text-slate-400">
            <?= $item->description() ?>
        </div>
    </div>
</div>