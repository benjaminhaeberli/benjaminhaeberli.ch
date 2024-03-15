<div class="flex flex-col gap-1 text-sm">
    <div class="flex items-start sm:items-center gap-1 flex-col sm:flex-row">
        <div>
            <a href="<?= $url ?>" target="_blank" class="hover:underline">
                <?= $name ?>
            </a>
        </div>
        <span class="text-slate-400 hidden sm:block">·</span>
        <div class="text-slate-400">
            <?= $description ?>
        </div>
    </div>
</div>