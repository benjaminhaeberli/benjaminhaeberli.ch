<?php snippet('header') ?>

<main class="flex flex-col gap-16">
    <section class="container max-w-screen-lg mx-auto">
        <div class="flex flex-wrap justify-between">
            <div class="flex flex-col gap-4 max-w-[50%] text-slate-900">
                <?= page()->hero_title()->kt() ?>
                <div class="kirbytext">
                    <?= page()->hero_text()->kt() ?>
                </div>
            </div>
            <img class="inline-block m-auto rounded-full w-96 h-96" src="/assets/images/benjamin-haeberli-software-developer-avatar.png" alt="Photo de Benjamin Haeberli assis devant son ordinateur">
        </div>
    </section>

    <section class="container max-w-screen-lg mx-auto">
        <div class="flex flex-col w-9/12 gap-4 p-4 m-auto text-slate-900">
            <p class="font-mono font-bold uppercase text-slate-600">Outils et frameworks 🛠️</p>
            <h2 class="text-3xl font-bold">Compétences</h2>
            <div class="text-lg">
                Différentes technologies et outils.
            </div>
            <div class="flex flex-wrap p-8 text-sm bg-slate-200 gap-x-16 gap-y-4">
                <div class="flex flex-col">
                    <h3 class="font-bold uppercase">Back-End</h3>
                    <ul>
                        <li>PHP ⭐</li>
                        <li><a href="https://laravel.com/" class="href" target="_blank">Laravel</a> ⭐</li>
                        <li><a href="https://getkirby.com/" class="href" target="_blank">Kirby</a> ⭐</li>
                        <li>API REST</li>
                        <li>SQL</li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h3 class="font-bold uppercase">Front-End</h3>
                    <ul>
                        <li><a href="https://tailwindcss.com/" class="href" target="_blank">TailwindCSS</a> ⭐</li>
                        <li><a href="https://alpinejs.dev/" class="href" target="_blank">Alpine.js</a> ⭐</li>
                        <li><a href="https://vuejs.org/" class="href" target="_blank">Vue.js</a></li>
                        <li>SEO<sup>1</sup></li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h3 class="font-bold uppercase">Infrastructure</h3>
                    <ul>
                        <li><a href="https://infomaniak.com/fr/" class="href" target="_blank">Infomaniak</a> ⭐</li>
                        <li>GitHub</li>
                        <li>PHPUnit</li>
                        <li>PestPHP</li>
                        <li>n8n</li>
                    </ul>
                </div>

                <div class="flex flex-col">
                    <h3 class="font-bold uppercase">Bonnes pratiques</h3>
                    <ul>
                        <li>SOLID, DRY ❤️</li>
                        <li>CI/CD</li>
                        <li>UML</li>
                        <li>TDD & DDD<sup>2</sup></li>
                    </ul>
                </div>

                <div class="flex flex-col">
                    <h3 class="font-bold uppercase">Web</h3>
                    <ul>
                        <li>HTML/CSS</li>
                        <li>JavaScript</li>
                        <li>SASS/LESS</li>
                        <li>Vite</li>
                    </ul>
                </div>

                <div class="flex flex-col">
                    <h3 class="font-bold uppercase">Outils</h3>
                    <ul>
                        <li>Plausible</li>
                        <li>KeyCDN</li>
                        <li>Google Search Console</li>
                        <li>Ubbersuggest</li>
                    </ul>
                </div>

                <div class="flex flex-col">
                    <h3 class="font-bold uppercase">Management </h3>
                    <ul>
                        <li>Consulting</li>
                        <li>Audit</li>
                        <li>Needs assessment</li>
                        <li>Specifications</li>
                        <li>Planning</li>
                    </ul>
                </div>
            </div>
            <div>
                <p class="text-sm"><sup>1</sup> Optimisation technique "on-site/on-page"</p>
            </div>
        </div>
    </section>

    <section class="container max-w-screen-lg mx-auto">
        <div class="flex flex-col max-w-2xl gap-4 text-slate-900">
            <p class="font-mono font-bold uppercase text-slate-600">Combien ça coûte ? 💸</p>
            <h2 class="text-3xl font-bold">
                Tarifs
            </h2>
            <div class="text-lg">
                VOIR GRILLET TARIFAIRE PDF
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
                VOIR LINKEDIN + DEMANDER AUTRES AVIS
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
                    <details <?= ($question->open()->toBool()) ? 'open' : null ?>>
                        <summary class="p-4 font-bold border-2 border-dashed cursor-pointer border-slate-400 hover:border-slate-600">
                            <?= $question->title() ?>
                        </summary>
                        <div class="p-4 kirbytext">
                            <?= $question->answer() ?>
                        </div>
                    </details>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>


<?php snippet('footer') ?>
