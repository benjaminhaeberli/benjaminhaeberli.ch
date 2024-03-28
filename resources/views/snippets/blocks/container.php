<?php
$widthCss = isset($fullsize) ? null : 'w-full max-w-screen-xs';
$paddingTop = isset($paddingTop) ? $paddingTop : 'pt-24';
$gap = isset($gap) ? $gap : 'gap-1';
$css ??= null;
?>
<section class="flex px-4 md:px-16 lg:px-0 <?= $paddingTop ?> <?= $css ?>">
    <div class="flex flex-col mx-auto <?= $gap ?> <?= $widthCss ?>">
        <?php if ($content = $slots->content()) : ?>
            <?= $content ?>
        <?php endif ?>
    </div>
</section>