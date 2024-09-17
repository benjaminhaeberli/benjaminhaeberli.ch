<div class="flex items-center justify-center gap-2 to-reveal">
    <h2 class="text-lg font-bold">
        <?= $title ?>
    </h2>
    <?= $logo ?>
</div>
<div class="flex flex-wrap justify-center max-w-screen-xl mt-6 gap-x-16 gap-y-12">
    <?php foreach ($reviews as $review) : ?>
        <?php snippet('partials/review-item', $review) ?>
    <?php endforeach ?>
</div>
