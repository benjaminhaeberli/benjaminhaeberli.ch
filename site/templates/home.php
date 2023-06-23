<?php

use Kirby\Cms\Url;

?>

<?php snippet('header') ?>

<main class="flex flex-col">
    <section id="introduction" class="flex flex-col max-w-screen-xl gap-16 px-8 py-24 mx-auto">
        <div class="flex flex-wrap items-center justify-between gap-8 md:gap-16 xmd:flex-nowrap lg:flex-row">
            <div class="flex flex-col max-w-lg gap-6">
                <?= page()->hero_title()->kt() ?>
                <div class="text-lg bh__kirbytext b">
                    <?= page()->hero_text()->kt() ?>
                </div>
                <div class="flex flex-wrap gap-x-6 gap-y-4">
                    <a href="https://calendly.com/benjaminhaeberli/visioconference" class="bh__btn">Planifier un appel</a>
                    <a href="/contact" class="bh__btn bh__btn-light">Me contacter</a>
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
    </section>

    <section class="patterns__topography">
        <div class="flex flex-col max-w-screen-xl gap-4 px-8 py-24 mx-auto ">
            <p class="font-mono font-bold uppercase text-zinc-400">Mais...</p>
            <h2 class="text-5xl font-bold">
                Qui suis-je ?
            </h2>
            <p class="max-w-lg text-xl leading-relaxed">
                Grâce à mon savoir-faire, je contribue à rapprocher les individus et faciliter leur utilisation du numérique, de façon éthique et inclusive ; <strong class="text-green-500">l’humain et l’écologie</strong> sont au centre de mes préoccupations.
            </p>
            <h2 class="mx-auto text-3xl font-bold">
                Mes valeurs
            </h2>
            <div class="flex gap-4">
                <div class="flex flex-col gap-4">
                    <h3>Transparence 👁️</h3>
                    <p>Pour établir une relation de confiance avec mes clients, j’ai choisi d’être transparent sur l’ensemble de mon activité. Je communique publiquement ma comptabilité, les outils que j’utilise ainsi que mes objectifs sur mon blog et mon profil LinkedIn. Je suis adepte du « build in public », autrement dit « construire son business publiquement »</p>
                </div>
                <div class="flex flex-col gap-4">
                    <h3>Solidarité 🙌</h3>
                    <p>L'inspiration se puise dans d'innombrables sources, mais je suis convaincu qu'échanger avec d'autres individus reste primordiale pour être connecté à ce qui nous entoure. Je souhaite contribuer à la création d'une société plus unie, qui privilégie l'entraide à l'individualisme et l’intérêt publique aux désirs personnels.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <h3>Égalité 👽</h3>
                    <p>Je suis en faveur d'une meilleure répartition des biens et des ressources, mais aussi de pratiques plus inclusives, adaptées à toutes et tous. Lors de la conception de mes outils, je porte une attention particulière à l'ergonomie, à l'interface, mais également à leur prix, pour qu’un maximum de personnes puissent en profiter, peu importe leur origine, leurs croyances, leur sexe, etc.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <h3>Ouverture d’esprit 🧠</h3>
                    <p>Rien de mieux pour s’améliorer que se questionner sur ses habitudes. Je suis persuadé que pour être en adéquation avec le monde d’aujourd’hui, chacun doit pouvoir se remettre en question. Une réflexion profonde sur sa propre culture, ses croyances et ses coutumes permet de s’adapter aux problématiques actuelles et répondre aux besoins de tous·tes.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-24 bg-zinc-900/20">
        <!-- Afficher 1 card à la fois avec scrollh horizontal : https://alvarotrigo.com/blog/scroll-horizontally-with-mouse-wheel-vanilla-java/ -->
        <div class="grid max-w-screen-xl grid-cols-1 gap-8 px-8 mx-auto sm:grid-cols-2 lg:grid-cols-3">
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
                            <a href=" xxxurlxxx" class="bh__dark-href" target="_blank">W3C</a>, <a href="xxxurlxxx" class="bh__dark-href" target="_blank">Ubbersuggest</a>, <a href="xxxurlxxx" class="bh__dark-href" target="_blank">Google Search Console</a>
                        </p>
                    </li>
                    <li><strong>Boost des performances</strong>
                        <p class="text-sm list-none">
                            <a href="xxxurlxxx" class="bh__dark-href" target="_blank">Google Pagespeed</a>, <a href="xxxurlxxx" class="bh__dark-href" target="_blank">GTMetrix</a>, <a href="xxxurlxxx" class="bh__dark-href" target="_blank">Pingdom Tools</a>, <a href="xxxurlxxx" class="bh__dark-href" target="_blank">Website Carbon</a>
                        </p>
                    </li>
                    <li><strong>Alternative aux GAFAM </strong>
                        <p class="text-sm list-none">
                            <a href="xxxurlxxx" class="bh__dark-href" target="_blank">Plausible</a>, <a href="xxxurlxxx" class="bh__dark-href" target="_blank">kSuite</a>
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
                            <a href="https://github.com/features/actions" class="bh__dark-href" target="_blank">GitHub Actions</a>, <a href="xxxurlxxx" class="bh__dark-href" target="_blank">PestPHP</a>, <a href="xxxurlxxx" class="bh__dark-href" target="_blank">PHPStan</a>, <a href="xxxurlxxx" class="bh__dark-href" target="_blank">Laravel Pint</a>, <a href="xxxurlxxx" class="bh__dark-href" target="_blank">Rector</a>
                        </p>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <div class="max-w-lg leading-relaxed">
        Notre planète est notre foyer et je pense que nous devons agir pour le préserver. Selon moi, chaque acteur·rice doit s'impliquer de manière proportionnelle à son impact, que ce soit en tant qu'individu·e, association, entreprise ou État, à la sauvegarde de nos écosystèmes. J’adopte donc une approche minimaliste et réfléchie afin de limiter l’impact environnemental de mes travaux, tout en délivrant des produits très performants.
    </div>

    <section class="flex items-center max-w-screen-xl gap-4 px-8 py-24 mx-auto">
        <article class="flex flex-col max-w-lg gap-8 p-4 mb-8">
            <div class="flex flex-col gap-2">
                <h2 class="text-3xl font-bold">Cas client</h2>
                <p class="text-zinc-400">Site <a href="https://guillemsalles.fr/" class="bh__href" target="_blank">guillemsalles.fr</a> réalisé en 2022</p>
            </div>
            <p class="pl-4 text-lg border-l-4 border-primary">Benjamin a fait un super job pour créer mon site web. Des propositions au niveau de l'architecture, de l'hébergement jusqu'aux différentes fonctionnalités son travail a été soigné et précieux, notamment sur le volet de l'impact environnemental.
                Il intègre les nouvelles fonctionnalités avec réactivité et assure parfaitement la maintenance.
            </p>
            <div class="flex flex-row items-center gap-4">
                <img class="block object-cover w-16 h-16" src="/assets/images/reviews/guillemsalles.avif" alt="Photo de Guillem Salle" loading="lazy">
                <div class="flex flex-col ">
                    <h3><a href="https://guillemsalles.fr/" class="bh__dark-href" target="_blank">Guillem Salles</a></h3>
                    <p class="text-zinc-300">Ghostwriter engagé</p>
                </div>
            </div>
        </article>
        <article class="flex flex-col gap-4 text-sm">
            <video class="object-cover w-full h-full " autoplay muted loop id="birds">
                <source src="<?= Url::to('assets/videos/compressed_loom_guillemsalles.fr.mp4') ?>" type="video/mp4">
            </video>
            <div class="flex items-center gap-2">
                <span class="px-2 py-1 text-green-500 rounded-full bg-green-500/10 ring-1 ring-inset ring-green-500/20">
                    EcoIndex : <strong>A</strong>
                </span>
                <span class="px-2 py-1 text-green-500 rounded-full bg-green-500/10 ring-1 ring-inset ring-green-500/20">
                    CO<sub>2</sub> : <strong>0.07 g</strong>
                </span>
                <span class="text-zinc-400">•</span>
                <a href="https://www.websitecarbon.com/website/guillemsalles-fr/" class="bh__dark-href" target="_blank">Plus de détails sur websitecarbon.com</a>
            </div>
        </article>
    </section>




    <section id="tarifs" class="max-w-screen-xl py-24 mx-auto ">
        <div class="flex flex-col gap-4 px-8 mx-auto md:px-16 lg:px-0">
            <header class="flex flex-col gap-4 ">
                <p class="font-mono font-bold uppercase text-zinc-400">Combien ça coûte ? 💸</p>
                <h2 class="text-3xl font-bold">
                    Tarifs
                </h2>
            </header>

        </div>
    </section>

    <section id="avis-clients" class="container max-w-screen-lg py-24 mx-auto ">
        <div class="flex flex-col gap-4 px-8 mx-auto md:px-16 lg:px-0">
            <p class="font-mono font-bold uppercase text-zinc-400">Le résultat d'un travail minutieux 💬</p>
            <h2 class="text-3xl font-bold">
                Avis client·e·s
            </h2>
            <div class="grid grid-cols-1 gap-16 py-4 lg:grid-cols-2">
                <div class="grid gap-8 auto-rows-min">
                    <article class="flex flex-col gap-4">
                        <p class="pl-4 border-l-2 border-slate-900">J'ai fait appel à Benjamin pour refaire mon site internet. Je recherchais quelqu'un de bien organisé et réactif, et je suis super bien tombée ! Benjamin était à l'écoute de mes demandes et besoins, et j'ai senti qu'il s'est vraiment investi pour mon projet. Je sais que si j'ai le moindre souci, je peux compter sur lui pour le régler rapidement. Je le recommande sans hésitation pour vos projets web !
                        </p>
                        <div class="flex flex-row items-center gap-4 text-sm">
                            <img class="block object-cover w-16 h-16" src="/assets/images/reviews/morganeraposo.avif" alt="Photo de Morgane Raposo" loading="lazy">
                            <div class="flex flex-col ">
                                <h3><a href=" https://www.linkedin.com/in/morgane-raposo-9602a1166" class="bh__dark-href" target="_blank">Morgane Raposo</a></h3>
                                <p class="text-zinc-300">Photographe elopement, mariage et reportage</p>
                            </div>
                        </div>
                    </article>
                    <article class="flex flex-col gap-4">
                        <div class="flex flex-col gap-2 pl-4 border-l-2 border-slate-900">
                            <p>J'ai eu la chance de travailler avec Benjamin sur divers projets chez 925. Toujours très agréable de travailler avec un autre passionné du monde du web, j'espère pouvoir continuer à collaborer sur des projets dans le futur!
                            </p>
                            <p>Son éthique de travail, ses grandes connaissances et sa communication très claire avec les clients font de lui un freelancer performant. Vivement recommandé!
                            </p>
                        </div>
                        <div class="flex flex-row items-center gap-4 text-sm">
                            <img class="block object-cover w-16 h-16" src="/assets/images/reviews/thomasmiller.avif" alt="Photo de Thomas Miller" loading="lazy">
                            <div class="flex flex-col ">
                                <h3>
                                    <a href=" https://www.linkedin.com/in/thomas-miller-671589a3/" class="bh__dark-href" target="_blank">Thomas Miller</a>
                                </h3>
                                <p class="text-zinc-300">Développeur web</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="grid gap-4 auto-rows-min">
                    <article class="flex flex-col gap-4">
                        <div class="flex flex-col gap-2 pl-4 border-l-2 border-slate-900">
                            <p>Benjamin, sans aucun doute, fait partie des collègues les plus dynamiques et les plus appliqués avec lesquels j'ai eu la chance de pouvoir collaborer. En plus de ses compétences expertes dans le domaine du développement web, il est capable d'adaptations et sait apporter avec pertinence son point de vue sur d'autres secteurs dont celui du graphic/web design dont je fais partie.
                            </p>
                            <p>Je ne peux que grandement recommander ses aptitudes et son attitude chaleureuse en tant que collègue ! Je lui souhaite bonne chance pour ses projets futurs !
                            </p>
                        </div>
                        <div class="flex flex-row items-center gap-4 text-sm ">
                            <img class="block object-cover w-16 h-16" src="/assets/images/reviews/miguelmaldonado.avif" alt="Photo de Miguel Maldonado" loading="lazy">
                            <div class="flex flex-col ">
                                <h3>
                                    <a href=" https://www.linkedin.com/in/miguel-maldonado-071b23194/" class="bh__dark-href" target="_blank">Miguel Maldonado</a>
                                </h3>
                                <p class="text-zinc-300">Lead UI Designer / Artist 2D</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <?php /* snippet('sections/foire-aux-questions') */  ?>


</main>

<?php snippet('footer') ?>
