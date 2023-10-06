<?php snippet('header') ?>

<main class="flex flex-col">
    <section class="container max-w-screen-xl px-8 py-24 mx-auto">
        <div class="flex flex-col gap-4 px-8 mx-auto md:px-16 lg:px-0">
            <p class="font-mono font-bold uppercase text-zinc-400">Combien ça coûte ? 💸</p>
            <h1 class="text-4xl font-bold">
                <?= page()->title() ?>
            </h1>
        </div>
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
</main>


<?php snippet('footer') ?>
