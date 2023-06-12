<?php snippet('header') ?>

<main class="flex flex-col gap-16">
    <section class="container max-w-screen-lg mx-auto">
        <div class="flex flex-col gap-4 px-8 mx-auto md:px-16 lg:px-0">
            <p class="font-mono font-bold uppercase text-slate-600">XXXX 📜</p>
            <h1 class="text-4xl font-bold">
                <?= page()->title() ?>
            </h1>
            <div class="text-lg">
                <p>J'utilise presque exclusivement des outils
                    <span class="relative cursor-pointer group">open source
                        <legend class="absolute max-w-sm text-sm opacity-0 text-zinc-50 bg-slate-900 -left-32 w-96 group-hover:opacity-100">La désignation open source s'applique aux logiciels et indique généralement les possibilités de libre redistribution, d'accès au code source et de création de travaux dérivés.</legend>
                    </span>
                </p>
            </div>
        </div>
    </section>
</main>


<?php snippet('footer') ?>
