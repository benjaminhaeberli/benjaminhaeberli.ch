<?php

use Kirby\Toolkit\I18n;

?>

<?php snippet('header') ?>

<main class="flex flex-col mt-8 sm:mt-24">

    <!-- Hero -->
    <?php snippet('partials/container', slots: true, data: ['css' => 'to-reveal', 'paddingTop' => 'pt-8']) ?>
    <?php slot('content') ?>
    <div class="flex flex-col gap-6">
        <div class="space-y-4">
            <p class="p-1 px-2 text-sm rounded w-fit bg-gradient-to-t from-slate-50/20 to-slate-50/5">
                Architecte Logiciel ✽ Freelance
            </p>
            <div class="space-y-2">
                <p class="text-2xl font-bold sm:text-4xl">
                 Salut, je suis Benjamin.
                </p>
                <h1 class="text-2xl font-medium text-slate-300 sm:text-3xl">
                    Un développeur freelance qui aime le code performant et durable.
                </h1>
            </div>
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
            <a href="https://calendly.com/benjaminhaeberli/visioconference" target="_blank" class="flex items-center px-4 py-2 font-bold rounded bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-pink-500 hover:to-yellow-500">
                <?= I18n::translate('actions.plan_call') ?>
            </a>
            <a href="https://tally.so/r/n08Eey" target="_blank" class="flex items-center px-4 py-2 font-bold border-2 rounded border-slate-50 hover:bg-slate-100 hover:border-slate-100 hover:text-slate-800">
                <?= I18n::translate('actions.contact_me') ?>
            </a>
        </div>
    </div>
    <?php endslot() ?>
    <?php endsnippet() ?>

    <!-- Skills -->
    <?php snippet('partials/container', slots: true, data: ['css' => 'to-reveal']) ?>
    <?php slot('content') ?>
    <div class="flex items-center gap-2">
    <h2 class="text-lg font-bold">
        <?= 'Compétences' ?>
    </h2>
    <?= icon('lucide:file-code-2', ['class' => 'text-sky-400']) ?>
    </div>
    <?php foreach (page()->skillsRefs()->toStructure() as $item) { ?>
            <?php snippet('partials/skill-item', ['item' => $item])  ?>
        <?php } ?>
    <?php endslot() ?>
    <?php endsnippet() ?>

    <!-- Work -->
    <?php snippet('partials/container', slots: true, data: ['css' => 'to-reveal', 'paddingTop' => 'pt-12']) ?>
    <?php slot('content') ?>
    <?php snippet(
        name: 'partials/basic-section',
        data: [
            'title' => 'Travaux',
            'logo' => icon('lucide:briefcase-business', ['class' => 'text-sky-400']),
            'items' => page()
                ->worksRefs()
                ->toStructure(),
        ],
        slots: true
    ); ?>
    <?php endsnippet() ?>
    <?php endslot() ?>
    <?php endsnippet() ?>

    <!-- Open source -->
    <?php snippet('partials/container', slots: true, data: ['css' => 'to-reveal', 'paddingTop' => 'pt-12']) ?>
    <?php slot('content') ?>
    <?php snippet(
        'partials/basic-section',
        data: [
            'title' => 'Open source',
            'logo' => icon('lucide:hand-heart', ['class' => 'text-rose-400']),
            'items' => page()->openSourceRefs()->toStructure(),
        ],
        slots: true
    ) ?>
    <?php endsnippet() ?>
    <?php endslot() ?>
    <?php endsnippet() ?>

    <!-- Testimonials -->
    <?php snippet('partials/container', slots: true, data: ['fullsize' => true]) ?>
    <?php slot('content') ?>
    <?php snippet(
        'partials/reviews-section',
        data: [
            'title' => 'Témoignages',
            'logo' => icon('lucide:messages-square', ['class' => 'text-indigo-400']),
            'reviews' => [
                [
                    'name' => 'Guillem Salles',
                    'job' => 'Ghostwriter engagé',
                    'url' => 'https://guillemsalles.fr/',
                    'image_src' => '/images/reviews/guillemsalles.avif',
                    'content' => "<p>Benjamin a fait un super job pour créer mon site web. Des propositions au niveau de l'architecture, de l'hébergement jusqu'aux différentes fonctionnalités son travail a été soigné et précieux, notamment sur le volet de l'impact environnemental. Il intègre les nouvelles fonctionnalités avec réactivité et assure parfaitement la maintenance.</p>",
                ],
                [
                    'name' => 'Miguel Maldonado',
                    'job' => 'Lead UI Designer / Artist 2D',
                    'url' => 'https://www.linkedin.com/in/miguel-maldonado-071b23194/',
                    'image_src' => '/images/reviews/miguelmaldonado.avif',
                    'content' => "<p>Benjamin, sans aucun doute, fait partie des collègues les plus dynamiques et les plus appliqués avec lesquels j'ai eu la chance de pouvoir collaborer. En plus de ses compétences expertes dans le domaine du développement web, il est capable d'adaptations et sait apporter avec pertinence son point de vue sur d'autres secteurs dont celui du graphic/web design dont je fais partie.</p><p>Je ne peux que grandement recommander ses aptitudes et son attitude chaleureuse en tant que collègue ! Je lui souhaite bonne chance pour ses projets futurs !</p>",
                ],
                [
                    'name' => 'Morgane Raposo',
                    'job' => 'Photographe indépendante',
                    'url' => 'https://morganeraposo.ch/',
                    'image_src' => '/images/reviews/morganeraposo.avif',
                    'content' => "<p>J'ai fait appel à Benjamin pour refaire mon site internet. Je recherchais quelqu'un de bien organisé et réactif, et je suis super bien tombée ! Benjamin était à l'écoute de mes demandes et besoins, et j'ai senti qu'il s'est vraiment investi pour mon projet. Je sais que si j'ai le moindre souci, je peux compter sur lui pour le régler rapidement. Je le recommande sans hésitation pour vos projets web !</p>",
                ],
                [
                    'name' => 'Thomas Miller',
                    'job' => 'Développeur web',
                    'url' => 'https://www.linkedin.com/in/miguel-maldonado-071b23194/',
                    'image_src' => '/images/reviews/thomasmiller.avif',
                    'content' => "<p>J'ai eu la chance de travailler avec Benjamin sur divers projets chez 925. Toujours très agréable de travailler avec un autre passionné du monde du web, j'espère pouvoir continuer à collaborer sur des projets dans le futur !</p><p>Son éthique de travail, ses grandes connaissances et sa communication très claire avec les clients font de lui un freelancer performant. Vivement recommandé !</p>",
                ],
            ],
        ],
        slots: true
    ) ?>
    <?php endsnippet() ?>
    <?php endslot() ?>
    <?php endsnippet() ?>

</main>

<?php snippet('footer', data: ['css' => 'to-reveal']) ?>
