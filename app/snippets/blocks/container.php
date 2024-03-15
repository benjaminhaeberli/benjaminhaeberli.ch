<?php
$widthCss = isset($fullsize) ? null : 'w-full max-w-screen-xs';
$css ??= null;
?>
<section class="flex px-4 pt-24 md:px-16 lg:px-0 <?= $css ?>">
    <div class="flex flex-col gap-1 mx-auto <?= $widthCss ?>">
        <?php if ($content = $slots->content()) : ?>
            <?= $content ?>
        <?php endif ?>
    </div>
</section>
