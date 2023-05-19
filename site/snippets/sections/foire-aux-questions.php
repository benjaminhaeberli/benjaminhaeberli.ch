<section id="foire-aux-questions" class="container max-w-screen-lg mx-auto mt-6">
    <div class="flex flex-col max-w-2xl gap-2 m-auto text-slate-900">
        <p class="font-mono font-bold uppercase text-slate-600">Toujours des doutes ?</p>
        <h2 class="text-3xl font-bold ">
            Foire aux <span class="relative inline-block before:block before:absolute before:-inset-1 before:scale-y-75 before:bg-darkyellow-600 before:translate-y-1">
                <span class="relative">questions</span>
            </span>
        </h2>
        <div class="flex flex-col gap-4 mt-4">
            <?php
            // using the `toStructure()` method, we create a structure collection
            $questions = $page->questions()->toStructure();
            // we can then loop through the entries and render the individual fields
            foreach ($questions as $question) : ?>
                <details <?= ($question->open()->toBool()) ? 'open' : null ?>>
                    <summary class="p-4 font-bold border-2 border-dashed cursor-pointer border-slate-400 hover:border-slate-600">
                        <?= $question->title() ?>
                    </summary>
                    <div class="p-4 bh__kirbytext">
                        <?= $question->answer() ?>
                    </div>
                </details>
            <?php endforeach ?>
        </div>
    </div>
</section>
