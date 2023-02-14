<?php snippet('header') ?>

<h1 class="text-lg">
    <?= snippet('hgroup', ['title' => page()->title()]) ?>
</h1>



<section class="container mx-auto bg-slate-50">
    <div class="flex">
        <div class="mx-auto max-w-lg">
            <h1 class="mt-4 text-6xl font-semibold font-serif leading-none text-slate-900">Éco-conception de services numériques.</h1>
            <p class="order-first text-base font-semibold leading-7 text-sky-500">Qui suis-je ?</p>
            <p class="mt-6 text-base leading-7 text-slate-700">Je suis engagé en matière de durabilité, d'éthique et de respect de la vie privée</p>
        </div>
        <img class="inline-block rounded-full" src="/assets/images/benjamin-haeberli-software-developer-avatar.png" alt="Photo de Benjamin Haeberli assis devant son ordinateur">
    </div>

</section>

<?= page()->content()->get('text') ?>

<?php snippet('footer') ?>