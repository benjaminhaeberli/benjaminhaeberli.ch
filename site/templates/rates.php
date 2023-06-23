<?php snippet('header') ?>

<main class="flex flex-col">
    <section class="container max-w-screen-xl px-8 py-24 mx-auto">
        <div class="flex flex-col gap-4 px-8 mx-auto md:px-16 lg:px-0">
            <p class="font-mono font-bold uppercase text-zinc-400">Combien ça coûte ? 💸</p>
            <h1 class="text-4xl font-bold">
                <?= page()->title() ?>
            </h1>
            <div class="text-lg">
                VOIR FIGMA + CV NANOUe
            </div>
        </div>
    </section>
    <section class="container max-w-screen-xl px-8 py-24 mx-auto">
        <article class="grid justify-center grid-cols-1 gap-4 py-4 lg:grid-cols-3">
            <div class="grid gap-4 auto-rows-min">
                <article class="flex flex-col gap-2 p-4 bg-primary/[.01] outline-2 outline-dotted outline-primary">
                    <h3><span class="text-xl font-bold">Tarif horaire</span> <sup>1</sup></h3>
                    <p><span class="p-1 text-2xl font-medium bg-primary text-zinc-950">110.-/heure</span></p>
                    <ol class="ml-4 list-disc">
                        <li><strong>Développement</strong> (code, bases de données, automatisation)</li>
                        <li><strong>Stratégies</strong> (architecture logicielle, gestion de projet, conseil, analyses)</li>
                        <li><strong>Réunions</strong> (rencontres, visioconférences, appels)</li>
                        <li><strong>Formation</strong> (CMS, sécurité, alternatives aux GAFAM)</li>
                    </ol>
                </article>
                <article class="flex flex-col gap-2 p-4 bg-zinc-500/[.01] outline-2 outline-dotted outline-zinc-600">
                    <h3><span class="text-xl font-bold">Déplacements</span></h3>
                    <p><span class="p-1 text-2xl font-medium text-zinc-950 bg-zinc-200">1.-/kilomètre</span></p>
                </article>
            </div>
            <div class="grid gap-4 auto-rows-min">
                <article class="flex flex-col gap-2 p-4 bg-zinc-500/[.01] outline-2 outline-dotted outline-zinc-600">
                    <h3><span class="text-xl font-bold">Sites internet</span></h3>
                    <p><span class="p-1 text-2xl font-medium text-zinc-950 bg-zinc-200">Dès 2000.-</span></p>
                    <ol class="ml-4 list-disc">
                        <li><strong>Projets standards</strong> (site vitrine, blog, portoflio, e-commerce)</li>
                        <li><strong>CMS</strong> (<a href="https://getkirby.com/" class="bh__href" target="_blank">Kirby</a> )</li>
                    </ol>
                </article>
                <article class="flex flex-col gap-2 p-4 bg-zinc-500/[.01] outline-2 outline-dotted outline-zinc-600">
                    <h3><span class="text-xl font-bold">Plateformes sur mesure</span></h3>
                    <p><span class="p-1 text-2xl font-medium text-zinc-950 bg-zinc-200">Dès 8000.-</span></p>
                    <ol class="ml-4 list-disc">
                        <li><strong>Projets avancés</strong> (fonctionnalités complexes, intranet, API)</li>
                        <li><strong>Technologies avancées</strong> (<a href="https://vuejs.org/" class="bh__href" target="_blank">Laravel</a>, <a href="https://vuejs.org/" class="bh__href" target="_blank">Vue.js</a>)</li>
                    </ol>
                </article>
            </div>
            <div class="grid gap-4 auto-rows-min">
                <article class="flex flex-col gap-2 p-4 bg-zinc-400/[.01] outline-2 outline-dotted outline-zinc-600">
                    <h3><span class="text-xl font-bold">Licences</span></h3>
                    <p><span class="p-1 text-2xl font-medium text-zinc-950 bg-zinc-200">Sur mesure</span></p>
                    <ol class="ml-4 list-disc">
                        <li><strong>Commun numérique</strong><sup>2</sup> (recommandée, gratuit)</li>
                        <li><strong>Privative ou cession</strong> (sur demande, payant)</li>
                    </ol>
                </article>
                <article class="flex flex-col gap-2 p-4 bg-zinc-400/[.01] outline-2 outline-dotted outline-slate-600">
                    <h3><span class="text-xl font-bold">Maintenance</span></h3>
                    <p><span class="p-1 text-2xl font-medium text-zinc-950 bg-zinc-200">Dès 220.-/année</span></p>
                    <ol class="ml-4 list-disc">
                        <li><strong>Préventive</strong> (mises à jour des dépendances, sauvegardes)</li>
                        <li><strong>Corrective</strong> (corrections des bugs, rétablissement des sauvegardes)</li>
                        <li><strong>Évolutive</strong> (réusinage de code, ajouts de fonctionnalités)</li>
                    </ol>
                </article>
            </div>
        </article>
        <footer class="flex flex-col gap-2 text-sm">
            <p><sup>1</sup> Je facture par tranche de 30min (minimum 1 heure) avec délai de paiement à 20 jours. Ce tarif horaire est majoré de 50% en cas d’horaires extraordinaires exigés : de 18:00 à 08:00 du lundi au samedi, les week-end et jours feriés (<a href="https://www.vd.ch/themes/formation/jours-feries-et-vacances-scolaires/jours-feries-et-vacances-scolaires-2023" class="bh__dark-href" target="_blank">Canton de Vaud, Suisse</a>).</p>
            <p><sup>2</sup> Le code source et la documentation doivent être rendus publiques. Licences autorisées : <a href="https://choosealicense.com/licenses/agpl-3.0/" class="bh__dark-href" target="_blank">GNU AGPLv3</a>, <a href="https://choosealicense.com/licenses/gpl-3.0/" class="bh__dark-href" target="_blank">GNU GPLv3</a>, <a href="https://choosealicense.com/licenses/mit/" class="bh__dark-href" target="_blank">MIT License</a>, <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" class="bh__dark-href" target="_blank">CC BY-NC-SA 4.0</a></p>
        </footer>
    </section>
    <section id="competences" class="max-w-screen-lg m-auto my-24 outline-2 outline-dashed outline-zinc-800">
        <div class="flex flex-col gap-4 p-8 m-auto md:p-16 text-zinc-50">
            <header class="flex flex-col gap-4 ">
                <p class="font-mono font-bold uppercase text-zinc-400">Outils et frameworks 🛠️</p>
                <h2 class="text-3xl font-bold">Compétences</h2>
                <div class="">
                    J'utilise presque exclusivement des outils open source et je suis <a href="https://www.infomaniak.com/fr?utm_term=62dbdda8347a1" class="bh__dark-href" target="_blank">affilié à l'hébergeur Infomaniak</a>, connu pour ses nombreux engagements <a href="https://news.infomaniak.com/cloud-ethique/" class="bh__dark-href" target="_blank">éthiques</a> et <a href="https://www.infomaniak.com/fr/ecologie" class="bh__href-dark" target="_blank">écologiques</a>. Ayant trouvé des alternatives plus fiables et performantes, je ne recommande plus et ne travaille plus avec certains outils populaires <i class="text-zinc-400">(WordPress, WooCommerce, jQuery, GULP, Bootstrap, Laravel Mix, Google Analytics, etc.)</i>
                </div>
            </header>
            <article class="grid justify-center grid-cols-2 gap-4 py-4 text-sm lg:grid-cols-4 text-zinc-400">
                <div class="grid gap-4">
                    <div class="h-auto max-w-full">
                        <h3 class="font-bold uppercase text-zinc-50">Back-End</h3>
                        <ol>
                            <li><a href="https://www.php.net/" class="bh__basic-href" target="_blank">PHP</a> ⭐</li>
                            <li><a href="https://laravel.com/" class="bh__basic-href" target="_blank">Laravel</a> ⭐</li>
                            <li><a href="https://getkirby.com/" class="bh__basic-href" target="_blank">Kirby</a> ⭐</li>
                            <li><a href="https://blog.hubspot.fr/website/api-rest" class="bh__basic-href" target="_blank">API REST</a> ⭐</li>
                            <li><a href="https://fr.wikipedia.org/wiki/Structured_Query_Language" class="bh__basic-href" target="_blank">SQL</a> ⭐</li>
                        </ol>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="font-bold uppercase text-zinc-50">Outils</h3>
                        <ol>
                            <li><a href="https://phpunit.de/" class="bh__dark-href" target="_blank">PHPUnit</a></li>
                            <li><a href="https://pestphp.com/" class="bh__dark-href" target="_blank">PestPHP</a></li>
                            <li><a href="https://plausible.io/" class="bh__dark-href" target="_blank">Plausible</a></li>
                            <li><a href="https://search.google.com/search-console/about" class="bh__dark-href" target="_blank">Google Search Console</a></li>
                            <li><a href="https://neilpatel.com/ubersuggest/" class="bh__dark-href" target="_blank">Ubbersuggest</a></li>
                            <li><a href="https://www.keycdn.com/" class="bh__dark-href" target="_blank">KeyCDN</a></li>
                            <li><a href="https://n8n.io/" class="bh__dark-href" target="_blank">n8n</a></li>
                        </ol>
                    </div>


                </div>
                <div class="grid gap-4">
                    <div class="flex flex-col">
                        <h3 class="font-bold uppercase text-zinc-50">Front-End</h3>
                        <ol>
                            <li>HTML/CSS/JavaScript</li>
                            <li><a href="https://tailwindcss.com/" class="bh__basic-href" target="_blank">TailwindCSS</a> ⭐</li>
                            <li><a href="https://alpinejs.dev/" class="bh__basic-href" target="_blank">Alpine.js</a> ⭐</li>
                            <li><a href="https://vuejs.org/" class="bh__basic-href" target="_blank">Vue.js</a></li>
                            <li><a href="https://vitejs.dev/" class="basic-bh__basic-href" target="_blank">Vite.js</a></li>
                            <li><a href="https://fr.wikipedia.org/wiki/Optimisation_pour_les_moteurs_de_recherche" class="bh__dark-href" target="_blank">SEO</a><sup>1</sup></li>
                        </ol>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="font-bold uppercase text-zinc-50">Éco-conception</h3>
                        <ol>
                            <li><a href="https://validator.w3.org/" class="bh__dark-href" target="_blank">W3C Validator</a></li>
                            <li><a href="https://pagespeed.web.dev/" class="bh__dark-href" target="_blank">Google Pagespeed</a></li>
                            <li><a href="https://gtmetrix.com/" class="bh__dark-href" target="_blank">GTMetrix</a></li>
                            <li><a href="https://tools.pingdom.com/" class="bh__dark-href" target="_blank">Pingdom Tools</a></li>
                            <li><a href="https://websitecarbon.com/" class="bh__dark-href" target="_blank">Website Carbon</a></li>
                        </ol>
                    </div>
                </div>
                <div class="grid gap-4">
                    <div class="flex flex-col">
                        <h3 class="font-bold uppercase text-zinc-50">Infrastructure</h3>
                        <ol>
                            <li><a href="https://infomaniak.com/fr/" class="bh__basic-href" target="_blank">Infomaniak</a> ⭐</li>
                            <li><a href="https://github.com/" class="bh__dark-href" target="_blank">GitHub</a></li>
                            <li><a href="https://www.vultr.com/" class="bh__dark-href" target="_blank">Vultr</a></li>
                            <li><a href="https://ploi.io/" class="bh__dark-href" target="_blank">Ploi.io</a></li>
                        </ol>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="font-bold uppercase text-zinc-50">Consulting</h3>
                        <ol>
                            <li>Conseils</li>
                            <li>Audit de code</li>
                            <li>Évaluation des besoins</li>
                            <li>Cahiers des charges</li>
                            <li>Planification</li>
                        </ol>
                    </div>
                </div>
                <div class="grid gap-4">
                    <div class="flex flex-col">
                        <h3 class="font-bold uppercase text-zinc-50">Bonnes pratiques</h3>
                        <ol>
                            <li><a href="https://fr.wikipedia.org/wiki/SOLID_(informatique)" class="bh__basic-href" target="_blank">SOLID</a> & <a href="https://fr.wikipedia.org/wiki/Ne_vous_r%C3%A9p%C3%A9tez_pas" class="bh__basic-href" target="_blank">DRY</a> ⭐</li>
                            <li><a href="https://fr.wikipedia.org/wiki/Test_driven_development" class="bh__basic-href" target="_blank">TDD</a> & <a href="https://fr.wikipedia.org/wiki/Conception_pilot%C3%A9e_par_le_domaine" class="bh__basic-href" target="_blank">DDD</a></li>
                            <li><a href="https://fr.wikipedia.org/wiki/CI/CD" class="bh__basic-href" target="_blank">CI/CD</a></li>
                            <li><a href="https://fr.wikipedia.org/wiki/UML_(informatique)" class="bh__dark-href" target="_blank">UML</a></li>
                        </ol>
                    </div>
                </div>
            </article>
            <div class="text-sm italic text-zinc-400 ">
                <p><sup>⭐</sup> Mes favoris !</p>
                <p><sup>1</sup> Optimisation technique "on-site/on-page" uniquement</p>
            </div>
        </div>
    </section>
</main>


<?php snippet('footer') ?>
