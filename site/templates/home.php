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
        <div class="flex flex-col gap-6 text-center ">
            <h2 class="font-mono font-bold uppercase text-zinc-400 ">Disponible pour...</h2>
            <div class="grid max-w-screen-xl grid-cols-1 gap-2 px-8 sm:grid-cols-2 md:grid-cols-4">
                <ol class="flex flex-col items-center gap-2">
                    <svg class="w-6 h-6 text-green-500 text-zinc-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <li class="text-zinc-400">Développer votre outil numérique sur-mesure</li>
                </ol>
                <ol class="flex flex-col items-center gap-2">
                    <svg class="w-6 h-6 text-green-500 text-zinc-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <li class="text-zinc-400">Optimiser les performances de votre site web</li>
                </ol>
                <ol class="flex flex-col items-center gap-2">
                    <svg class="w-6 h-6 text-green-500 text-zinc-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <li class="text-zinc-400">Réusiner votre code source et le rendre plus efficient</li>
                </ol>
                <ol class="flex flex-col items-center gap-2">
                    <svg class="w-6 h-6 text-green-500 text-zinc-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <li class="text-zinc-400">Automatiser vos processus et gérer vos données</li>
                </ol>
            </div>
        </div>
        <div class="grid max-w-screen-xl grid-cols-1 gap-8 px-8 pb-12 mx-auto sm:grid-cols-2 lg:grid-cols-3">
            <div class="flex flex-col gap-4 px-4 py-8 text-center bg-zinc-950">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 mx-auto mb-1 text-primary group-hover:-translate-y-2" aria-hidden="true">
                        <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v11.5A2.25 2.25 0 004.25 18h11.5A2.25 2.25 0 0018 15.75V4.25A2.25 2.25 0 0015.75 2H4.25zm4.03 6.28a.75.75 0 00-1.06-1.06L4.97 9.47a.75.75 0 000 1.06l2.25 2.25a.75.75 0 001.06-1.06L6.56 10l1.72-1.72zm4.5-1.06a.75.75 0 10-1.06 1.06L13.44 10l-1.72 1.72a.75.75 0 101.06 1.06l2.25-2.25a.75.75 0 000-1.06l-2.25-2.25z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-xl font-bold">Développement web</h3>
                    <p class="text-lg text-zinc-400">Site internet & plateforme numérique</span></p>
                </div>
                <ol class="flex flex-col gap-2">
                    <li><strong>Projets standards</strong> avec <a href=" https://getkirby.com/" class="bh__href" target="_blank">Kirby</a>
                        <p class="text-sm list-none text-zinc-400">
                            (Site vitrine, blog, portoflio, e-commerce)
                        </p>
                    </li>
                    <li><strong>Projets avancés</strong> avec <a href="https://vuejs.org/" class="bh__href" target="_blank">Laravel</a>
                        <p class="text-sm list-none text-zinc-400">
                            (Fonctionnalités complexes, intranet, API)
                        </p>
                    </li>
                    <li><strong>Bases de données</strong> avec <a href="https://fr.wikipedia.org/wiki/Structured_Query_Language" class="bh__href" target="_blank">SQL</a>
                        <p class="text-sm list-none text-zinc-400">
                            (Conception, schéma, requêtes sur-mesure)
                        </p>
                    </li>
                    <li><strong>Hébergement</strong> avec <a href="https://www.infomaniak.com/fr" class="bh__href" target="_blank">Infomaniak</a>
                        <p class="text-sm list-none text-zinc-400">
                            (Nom de domaine, hébergement web & mail)
                        </p>
                    </li>
                </ol>
            </div>
            <div class="flex flex-col gap-4 px-4 py-8 text-center bg-zinc-950">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 mx-auto text-primary" aria-hidden="true">
                    <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v11.5A2.25 2.25 0 004.25 18h11.5A2.25 2.25 0 0018 15.75V4.25A2.25 2.25 0 0015.75 2H4.25zm4.03 6.28a.75.75 0 00-1.06-1.06L4.97 9.47a.75.75 0 000 1.06l2.25 2.25a.75.75 0 001.06-1.06L6.56 10l1.72-1.72zm4.5-1.06a.75.75 0 10-1.06 1.06L13.44 10l-1.72 1.72a.75.75 0 101.06 1.06l2.25-2.25a.75.75 0 000-1.06l-2.25-2.25z" clip-rule="evenodd" />
                </svg>
                <div class="">
                    <h3 class="text-xl font-bold ">Optimisation & éco-conception</h3>
                    <p class="text-lg text-zinc-400">Améliorer vos outils existants</span></p>
                </div>
                <ol class="flex flex-col gap-2">
                    <li>
                        <strong>Amélioration sémantique & SEO</strong>
                        <p class="text-sm list-none">
                            <a href=" https://validator.w3.org/" class="bh__dark-href" target="_blank">W3C</a>, <a href="https://neilpatel.com/ubersuggest/" class="bh__dark-href" target="_blank">Ubbersuggest</a>, <a href="https://search.google.com/search-console" class="bh__dark-href" target="_blank">Google Search Console</a>
                        </p>
                    </li>
                    <li><strong>Boost des performances</strong>
                        <p class="text-sm list-none">
                            <a href="https://pagespeed.web.dev/" class="bh__dark-href" target="_blank">Google Pagespeed</a>, <a href="https://gtmetrix.com/" class="bh__dark-href" target="_blank">GTMetrix</a>, <a href="https://tools.pingdom.com/" class="bh__dark-href" target="_blank">Pingdom Tools</a>, <a href="https://www.websitecarbon.com/" class="bh__dark-href" target="_blank">Website Carbon</a>
                        </p>
                    </li>
                    <li><strong>Alternative aux GAFAM </strong>
                        <p class="text-sm list-none">
                            <a href="https://plausible.io/" class="bh__dark-href" target="_blank">Plausible</a>, <a href="https://www.infomaniak.com/fr/ksuite" class="bh__dark-href" target="_blank">kSuite</a>
                        </p>
                    </li>
                </ol>
            </div>
            <div class="flex flex-col gap-4 px-4 py-8 text-center bg-zinc-950">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 mx-auto text-primary" aria-hidden="true">
                    <path fill-rule="evenodd" d="M19 5.5a4.5 4.5 0 01-4.791 4.49c-.873-.055-1.808.128-2.368.8l-6.024 7.23a2.724 2.724 0 11-3.837-3.837L9.21 8.16c.672-.56.855-1.495.8-2.368a4.5 4.5 0 015.873-4.575c.324.105.39.51.15.752L13.34 4.66a.455.455 0 00-.11.494 3.01 3.01 0 001.617 1.617c.17.07.363.02.493-.111l2.692-2.692c.241-.241.647-.174.752.15.14.435.216.9.216 1.382zM4 17a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
                <div class="">
                    <h3 class="text-xl font-bold">Développement PHP</h3>
                    <p class="text-lg text-zinc-400">Outils sur mesure, API, CRON</span></p>
                </div>
                <ol class="flex flex-col gap-2">
                    <li>
                        <strong>Réusinage du code selon <a href="https://fr.wikipedia.org/wiki/SOLID_(informatique)" class="bh__href" target="_blank">SOLID</a> et <a href="https://fr.wikipedia.org/wiki/Ne_vous_r%C3%A9p%C3%A9tez_pas" class="bh__href" target="_blank">DRY</a></strong>
                        <p class="text-sm list-none text-zinc-400">
                            Utilisation des interfaces, enums, traits, value objects, data transfer objects.
                        </p>
                    </li>
                    <li>
                        <strong>Outils d'analyse automatique du code</strong>
                        <p class="text-sm list-none text-zinc-400">
                            <a href="https://github.com/features/actions" class="bh__dark-href" target="_blank">GitHub Actions</a>, <a href="https://pestphp.com/" class="bh__dark-href" target="_blank">PestPHP</a>, <a href="https://phpstan.org/" class="bh__dark-href" target="_blank">PHPStan</a>, <a href="https://github.com/laravel/pint" class="bh__dark-href" target="_blank">Laravel Pint</a>, <a href="https://getrector.com/" class="bh__dark-href" target="_blank">Rector</a>
                        </p>
                    </li>
                </ol>
            </div>
        </div>
    </section>

</main>

<?php snippet('footer') ?>
