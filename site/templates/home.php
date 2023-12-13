<?php


?>

<?php snippet('header') ?>

<main class="flex flex-col">
    <section id="introduction" class="flex flex-col max-w-screen-xl gap-16 px-8 pt-24 mx-auto">
        <div class="flex flex-wrap items-center justify-between gap-8 md:gap-16 xmd:flex-nowrap lg:flex-row">
            <div class="flex flex-col max-w-lg gap-6">
                <?= page()->hero_title()->kt() ?>
                <div class="text-lg bh__kirbytext b">
                    <?= page()->hero_text()->kt() ?>
                </div>
                <div class="flex flex-wrap gap-x-6 gap-y-4">
                    <a href="https://calendly.com/benjaminhaeberli/visioconference" class="bh__btn">Planifier un appel</a>
                    <a href="https://tally.so/r/n08Eey" target="_blank" class="bh__btn bh__btn-light">Me contacter</a>
                </div>
            </div>
            <img class="inline-block object-cover m-auto h-96 lg:m-0" src="/assets/images/benjamin-haeberli-software-developer_squooshed.avif" alt="Photo de Benjamin Haeberli assis devant son ordinateur">
        </div>
    </section>

</main>

<?php snippet('footer') ?>