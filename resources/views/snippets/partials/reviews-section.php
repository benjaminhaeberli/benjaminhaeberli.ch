<div class="flex items-center justify-center gap-2">
    <h2 class="text-lg font-bold">
        <?= $title ?>
    </h2>
    <?= $logo ?>
</div>
<? if($subtitle): ?>
    <p class="text-md text-neutral-300 text-center">
        <?= $subtitle ?>
    </p>
<? endif ?>
<div class="flex flex-wrap justify-center mt-6 gap-x-16 gap-y-12">
    <?php foreach ($reviews as $review) : ?>
        <?php snippet('partials/review-item', $review) ?>
    <?php endforeach ?>
</div>
