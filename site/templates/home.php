<?php snippet('header') ?>

<section class="container max-w-screen-xl mx-auto">
    <div class="flex justify-between">
        <div class="flex flex-col gap-4 max-w-2xl text-slate-900">
            <p class="font-mono font-bold uppercase text-slate-600">Bienvenue, je suis Benjamin Haeberli !</p>
            <h1 class="text-6xl font-bold font-serif">
                Un développeur web freelance <span class="before:block before:absolute before:-inset-1 before:scale-y-75 before:bg-green-300 before:translate-y-1 relative inline-block">
                    <span class="relative">engagé</span>
                </span> pour des projets plus responsables.
            </h1>
            <p>Je suis engagé en matière de durabilité, d'éthique et de respect de la vie privée</p>
            <?= page()->content()->get('text') . 'voir home.php' ?>
        </div>
        <img class="inline-block rounded-full" src="/assets/images/benjamin-haeberli-software-developer-avatar.png" alt="Photo de Benjamin Haeberli assis devant son ordinateur">
    </div>
</section>
<?php snippet('footer') ?>