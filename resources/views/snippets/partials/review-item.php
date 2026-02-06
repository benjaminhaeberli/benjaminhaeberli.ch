<?php

?>
<article class="flex flex-col w-full gap-4 text-xs xs:w-80 sm:w-64 to-reveal">
    <div class="flex flex-col gap-2 text-neutral-400">
        <?= $content ?>
    </div>
    <div class="flex flex-row items-center gap-4">
        <img class="block object-cover w-12 h-12 rounded-full" src="<?= $image_src ?>" alt="Photo de <?= $name ?>" loading="lazy">
        <div class="flex flex-col ">
            <h3>
                <a href="<?= $url ?>" class="font-semibold hover:underline" target="_blank"><?= $name ?></a>
            </h3>
            <p class="text-neutral-400"><?= $job ?></p>
        </div>
    </div>
</article>
