<?php


?>

<?php snippet('header') ?>

<main class="flex flex-col">
    <section class="flex px-8 pt-24 md:px-16 lg:px-0">
        <div class="flex flex-col gap-6 mx-auto w-[576px] max-w-screen-xs">
            <div class="flex flex-col gap-1 text-4xl font-bold">
                <p>
                    Salut, je suis Benjamin.
                </p>
                <h1 class="text-slate-300">
                    Un développeur qui aime le code performant et durable.
                </h1>
            </div>
            <div class="text-lg">
                Je vous aide à concevoir, architecturer et coder vos projets web. Je travaille avec des technologies modernes pour développer des outils sur-mesure et optimisés.
            </div>
            <div class="flex flex-wrap items-center gap-6">
                <?php snippet('svg/logos/laravel') ?>
                <?php snippet('svg/logos/kirbycms') ?>
                <?php snippet('svg/logos/nuxtjs') ?>
                <?php snippet('svg/logos/tailwindcss') ?>
                <?php snippet('svg/logos/infomaniak') ?>
            </div>
            <div class="flex flex-wrap gap-x-6 gap-y-4">
                <a href="https://calendly.com/benjaminhaeberli/visioconference" class="flex items-center px-4 py-2 font-bold bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-pink-500 hover:to-yellow-500">Planifier un appel</a>
                <a href="https://tally.so/r/n08Eey" target="_blank" class="flex items-center px-4 py-2 font-bold border-2 border-slate-50 hover:bg-slate-100 hover:border-slate-100 hover:text-slate-800">Me contacter</a>
            </div>
        </div>
    </section>
    <section class="flex px-8 pt-24 md:px-16 lg:px-0">
        <div class="flex flex-col gap-1 mx-auto w-[576px] max-w-screen-xs">

            <div class="flex items-center gap-2">
                <h2 class="text-lg font-bold">
                    Travaux
                </h2>
                <?php snippet('svg/icons/remixicon-briefcase-3-line') ?>
            </div>
            <div class="flex flex-col gap-1 text-sm">
                <div class="flex items-center gap-1">
                    <div>
                        <a href="https://standard-deluxe.ch" target="_blank" class="hover:underline">
                            standard-deluxe.ch
                        </a>
                    </div>
                    <div class="text-slate-400">
                        · Back-office du site mis en place avec KirbyCMS.
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-1 text-sm">
                <div class="flex items-center gap-1">
                    <div>
                        <a href="https://guillemsalles.fr" target="_blank" class="hover:underline">
                            guillemsalles.fr
                        </a>
                    </div>
                    <div class="text-slate-400">
                        · Site vitrine pour un ghostwriter freelance créé avec WordPress.
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php snippet('footer') ?>