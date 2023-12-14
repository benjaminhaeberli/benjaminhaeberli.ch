<div class="flex justify-center items-center gap-2">
    <h2 class="text-lg font-bold">
        <?= $title ?>
    </h2>
    <?= $logo ?>
</div>
<div class="flex gap-x-16 gap-y-12 mt-6 flex-wrap justify-center max-w-screen-xl">
    <?php foreach ($reviews as $review) : ?>
        <?php snippet('blocks/review-item', $review) ?>
    <?php endforeach ?>
</div>