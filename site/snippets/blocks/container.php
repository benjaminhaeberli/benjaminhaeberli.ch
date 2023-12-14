<?php
$widthCss = isset($fullsize) ? null : 'w-full max-w-screen-xs';
?>
<section class="flex px-4 pt-24 md:px-16 lg:px-0">
    <div class="flex flex-col gap-1 mx-auto <?= $widthCss ?>">
        <?php if ($content = $slots->content()) : ?>
            <?= $content ?>
        <?php endif ?>
    </div>
</section>