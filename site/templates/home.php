<?php snippet('header') ?>

<section class="container max-w-screen-xl mx-auto">
    <div class="flex flex-wrap justify-between">
        <div class="flex flex-col max-w-2xl gap-4 text-slate-900">
            <p class="font-mono font-bold uppercase text-slate-600">Bienvenue, je suis Benjamin Haeberli !</p>
            <h1 class="font-serif text-6xl font-bold">
                Un développeur <span class="relative inline-block before:block before:absolute before:-inset-1 before:scale-y-75 before:bg-green-300 before:translate-y-1">
                    <span class="relative">engagé</span>
                </span> pour du code performant et durable.
            </h1>
            <?= page()->text()->kt() ?>
        </div>
        <img class="inline-block rounded-full" src="/assets/images/benjamin-haeberli-software-developer-avatar.png" alt="Photo de Benjamin Haeberli assis devant son ordinateur">
    </div>
</section>

<section class="container max-w-screen-xl mx-auto">
    https://www.andrejilderda.nl/
    <div class="flex flex-col max-w-2xl gap-2 m-auto text-slate-900">
        <p class="font-mono font-bold uppercase text-slate-600">Toujours des doutes ?</p>
        <h1 class="font-serif text-4xl font-bold">
            Foire aux <span class="relative inline-block before:block before:absolute before:-inset-1 before:scale-y-75 before:bg-green-300 before:translate-y-1">
                <span class="relative">questions</span>
            </span>
        </h1>
        <?php
        // using the `toStructure()` method, we create a structure collection
        $questions = $page->questions()->toStructure();
        // we can then loop through the entries and render the individual fields
        foreach ($questions as $question) : ?>
            <details class="py-4 border-b-2 border-gray-400 border-dashed" <?= ($question->open()->toBool()) ? 'open' : '0' ?>>
                <summary class="font-bold cursor-pointer">
                    <?= $question->title() ?>
                </summary>
                <p><?= $question->answer() ?></p>
            </details>
        <?php endforeach ?>
    </div>
</section>

<?php snippet('footer') ?>
