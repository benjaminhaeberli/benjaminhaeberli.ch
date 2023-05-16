<?php snippet('header') ?>

<main class="flex flex-col gap-32">
    <section class="container max-w-screen-lg mx-auto">
        <div class="flex flex-wrap justify-between">
            <div class="flex flex-col gap-4 max-w-[50%] text-slate-900">
                <?= page()->hero_title()->kt() ?>
                <div>
                    <?= page()->hero_text()->kt() ?>
                </div>
            </div>
            <img class="inline-block m-auto rounded-full w-96 h-96" src="/assets/images/benjamin-haeberli-software-developer-avatar.png" alt="Photo de Benjamin Haeberli assis devant son ordinateur">
        </div>
    </section>

    <section class="container max-w-screen-lg mx-auto">
        <div class="flex flex-col max-w-2xl gap-4 text-slate-900">
            <p class="font-mono font-bold uppercase text-slate-600">Outils et frameworks 🛠️</p>
            <h2 class="text-3xl font-bold">
                Compétences
            </h2>
            <div class="text-lg">
                VOIR PDF
            </div>
        </div>
    </section>

    <section class="container max-w-screen-lg mx-auto">
        <div class="flex flex-col max-w-2xl gap-4 text-slate-900">
            <p class="font-mono font-bold uppercase text-slate-600">Le résultat d'un travail minutieux 💬</p>
            <h2 class="text-3xl font-bold">
                Avis client·e·s
            </h2>
            <div class="text-lg">
                VOIR PDF
            </div>
        </div>
    </section>


    <section class="container max-w-screen-lg mx-auto mt-6">
        <div class="flex flex-col max-w-2xl gap-2 m-auto text-slate-900">
            <p class="font-mono font-bold uppercase text-slate-600">Toujours des doutes ?</p>
            <h2 class="text-3xl font-bold ">
                Foire aux <span class="relative inline-block before:block before:absolute before:-inset-1 before:scale-y-75 before:bg-green-300 before:translate-y-1">
                    <span class="relative">questions</span>
                </span>
            </h2>
            <div class="flex flex-col gap-4 mt-4">
                <?php
                // using the `toStructure()` method, we create a structure collection
                $questions = $page->questions()->toStructure();
                // we can then loop through the entries and render the individual fields
                foreach ($questions as $question) : ?>
                    <details class="" <?= ($question->open()->toBool()) ? 'open' : '0' ?>>
                        <summary class="p-4 font-bold border-2 border-dashed cursor-pointer border-slate-400 hover:border-slate-600">
                            <?= $question->title() ?>
                        </summary>
                        <div class="p-4">
                            <p><?= $question->answer() ?></p>
                        </div>
                    </details>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>


<?php snippet('footer') ?>
