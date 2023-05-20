<?php snippet('header') ?>

<main class="flex flex-col gap-16">
    <section class="container max-w-screen-md mx-auto">
        <div class="flex flex-col gap-4 px-8 mx-auto md:px-16 lg:px-0">
            <h1 class="text-4xl font-bold">
                <?= page()->title() ?>
            </h1>
            <div class="bh__kirbytext">
                <?= page()->main_content()->kt() ?>
            </div>
    </section>
</main>

<?php snippet('footer') ?>
