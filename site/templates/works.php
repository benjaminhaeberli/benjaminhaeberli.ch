<?php snippet('header') ?>

<main class="flex flex-col gap-16">
    <section class="container max-w-screen-xl px-8 py-24 mx-auto">
        <div class="flex flex-col gap-4 px-8 mx-auto md:px-16 lg:px-0">
            <p class="font-mono font-bold uppercase text-slate-600">Mes années de pratique en entreprise 🎓</p>
            <h1 class="text-4xl font-bold">
                <?= page()->title() ?>
            </h1>
            <div class="text-lg">
                WORKS
            </div>
        </div>
    </section>

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
</main>


<?php snippet('footer') ?>
