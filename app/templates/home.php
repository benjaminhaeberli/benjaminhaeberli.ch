<?php


?>

<?php snippet('header') ?>

<main class="flex flex-col mt-8 sm:mt-24">

    <!-- Hero -->

    <?php snippet('blocks/container', slots: true, data: ['css' => 'to-reveal']) ?>
    <?php slot('content') ?>
    <div class="flex flex-col gap-6">
        <div class="flex flex-col gap-1 text-2xl font-bold sm:text-4xl">
            <p>
                Salut, je suis Benjamin.
            </p>
            <h1 class="text-slate-300">
                Un développeur qui aime le code performant et durable.
            </h1>
        </div>
        <div class="text-base sm:text-lg">
            Je vous aide à concevoir, architecturer et coder vos projets web. Je travaille avec des technologies modernes pour développer des outils sur-mesure et optimisés.
        </div>
        <div class="flex flex-wrap items-center gap-6">
            <?php snippet('svg/logos/laravel') ?>
            <?php snippet('svg/logos/kirbycms') ?>
            <?php snippet('svg/logos/mysql') ?>
            <?php snippet('svg/logos/tailwindcss') ?>
            <?php snippet('svg/logos/infomaniak') ?>
        </div>
        <div class="flex flex-wrap text-sm gap-x-6 gap-y-4 sm:text-base">
            <a href="https://calendly.com/benjaminhaeberli/visioconference" target="_blank" class="flex items-center px-4 py-2 font-bold bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-pink-500 hover:to-yellow-500">Planifier un appel</a>
            <a href="https://tally.so/r/n08Eey" target="_blank" class="flex items-center px-4 py-2 font-bold border-2 border-slate-50 hover:bg-slate-100 hover:border-slate-100 hover:text-slate-800">Me contacter</a>
        </div>
    </div>
    <?php endslot() ?>
    <?php endsnippet() ?>

    <!-- Work -->
    <?php snippet('blocks/container', slots: true, data: ['css' => 'to-reveal']) ?>
    <?php slot('content') ?>
    <?php snippet(
        'blocks/basic-section',
        data: [
                                    'title' => 'Travaux',
                                    'logo' => snippet('svg/icons/remixicon-briefcase-3-line', return: true),
                                    'items' => [
                                        [
                                            'name' => ' standard-deluxe.ch',
                                            'url' => 'https://standard-deluxe.ch',
                                            'description' => 'Back-office du site mis en place avec KirbyCMS.'
                                        ],
                                        [
                                            'name' => ' guillemsalles.fr',
                                            'url' => 'https://guillemsalles.fr',
                                            'description' => 'Site vitrine pour un ghostwriter freelance créé avec WordPress.'
                                        ]
                                    ]
                                ],
        slots: true
    ) ?>
    <?php endsnippet() ?>
    <?php endslot() ?>
    <?php endsnippet() ?>

    <!-- Open source -->
    <?php snippet('blocks/container', slots: true, data: ['css' => 'to-reveal']) ?>
    <?php slot('content') ?>
    <?php snippet(
        'blocks/basic-section',
        data: [
            'title' => 'Open source',
            'logo' => snippet('svg/icons/remixicon-hand-heart-line', return: true),
            'items' => [
                [
                    'name' => ' kirby-seo',
                    'url' => 'https://github.com/benjaminhaeberli/kirby-seo',
                    'description' => 'Plugin SEO minimaliste pour Kirby CMS. '
                ],
                [
                    'name' => 'checklist-design-web',
                    'url' => 'https://github.com/benjaminhaeberli/checklist-design-web',
                    'description' => 'Pour les designers et les développeurs.'
                ],
                [
                    'name' => 'modeles-rgpd-web',
                    'url' => 'https://github.com/benjaminhaeberli/checklist-design-web',
                    'description' => 'Modèles de politique de confidentialité, mentions légales, etc.'
                ]
            ]
        ],
        slots: true
    ) ?>
    <?php endsnippet() ?>
    <?php endslot() ?>
    <?php endsnippet() ?>

    <!-- Testimonials -->
    <?php snippet('blocks/container', slots: true, data: ['fullsize' => true]) ?>
    <?php slot('content') ?>
    <?php snippet(
        'blocks/reviews-section',
        data: [
            'title' => 'Témoignages',
            'logo' => snippet('svg/icons/remixicon-sparkling-line', return: true),
            'reviews' => [
                [
                    'name' => 'Guillem Salles',
                    'job' => 'Ghostwriter engagé',
                    'url' => 'https://guillemsalles.fr/',
                    'image_src' => '/images/reviews/guillemsalles.avif',
                    'content' => "<p>Benjamin a fait un super job pour créer mon site web. Des propositions au niveau de l'architecture, de l'hébergement jusqu'aux différentes fonctionnalités son travail a été soigné et précieux, notamment sur le volet de l'impact environnemental. Il intègre les nouvelles fonctionnalités avec réactivité et assure parfaitement la maintenance.</p>"
                ],
                [
                    'name' => 'Miguel Maldonado',
                    'job' => 'Lead UI Designer / Artist 2D',
                    'url' => 'https://www.linkedin.com/in/miguel-maldonado-071b23194/',
                    'image_src' => '/images/reviews/miguelmaldonado.avif',
                    'content' => "<p>Benjamin, sans aucun doute, fait partie des collègues les plus dynamiques et les plus appliqués avec lesquels j'ai eu la chance de pouvoir collaborer. En plus de ses compétences expertes dans le domaine du développement web, il est capable d'adaptations et sait apporter avec pertinence son point de vue sur d'autres secteurs dont celui du graphic/web design dont je fais partie.</p><p>Je ne peux que grandement recommander ses aptitudes et son attitude chaleureuse en tant que collègue ! Je lui souhaite bonne chance pour ses projets futurs !</p>"
                ],
                [
                    'name' => 'Morgane Raposo',
                    'job' => 'Photographe indépendante',
                    'url' => 'https://morganeraposo.ch/',
                    'image_src' => '/images/reviews/morganeraposo.avif',
                    'content' => "<p>J'ai fait appel à Benjamin pour refaire mon site internet. Je recherchais quelqu'un de bien organisé et réactif, et je suis super bien tombée ! Benjamin était à l'écoute de mes demandes et besoins, et j'ai senti qu'il s'est vraiment investi pour mon projet. Je sais que si j'ai le moindre souci, je peux compter sur lui pour le régler rapidement. Je le recommande sans hésitation pour vos projets web !</p>"
                ],
                [
                    'name' => 'Thomas Miller',
                    'job' => 'Développeur web',
                    'url' => 'https://www.linkedin.com/in/miguel-maldonado-071b23194/',
                    'image_src' => '/images/reviews/thomasmiller.avif',
                    'content' => "<p>J'ai eu la chance de travailler avec Benjamin sur divers projets chez 925. Toujours très agréable de travailler avec un autre passionné du monde du web, j'espère pouvoir continuer à collaborer sur des projets dans le futur !</p><p>Son éthique de travail, ses grandes connaissances et sa communication très claire avec les clients font de lui un freelancer performant. Vivement recommandé !</p>"
                ],
            ]
        ],
        slots: true
    ) ?>
    <?php endsnippet() ?>
    <?php endslot() ?>
    <?php endsnippet() ?>

</main>

<?php snippet('footer', data: ['css' => 'to-reveal']) ?>