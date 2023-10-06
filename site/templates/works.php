<?php

use Kirby\Cms\Url;

?>

<?php snippet('header') ?>

<main class="flex flex-col gap-16">
    <section class="container max-w-screen-xl px-8 pt-24 mx-auto">
        <div class="flex flex-col gap-4 px-8 mx-auto text-center md:px-16 lg:px-0">
            <p class="font-mono font-bold uppercase text-slate-600">Mes derniers projets réalisés 💼</p>
            <h1 class="text-4xl font-bold">
                <?= page()->title() ?>
            </h1>
        </div>
    </section>

    <section class="flex items-center max-w-screen-xl gap-4 px-8 mx-auto">
        <article class="flex flex-col max-w-lg gap-8 p-4 mb-8">
            <div class="flex flex-col gap-2">
                <h2 class="text-3xl font-bold">Refonte d'un site vitrine</h2>
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

    <section id="avis-clients" class="container max-w-screen-lg pb-12 mx-auto">
        <div class="flex flex-col gap-4 px-8 mx-auto md:px-16 lg:px-0">
            <p class="font-mono font-bold uppercase text-zinc-400">Le résultat d'un travail minutieux 💬</p>
            <h2 class="text-3xl font-bold">
                Avis client·e·s
            </h2>
            <div class="grid grid-cols-1 gap-16 py-4 lg:grid-cols-2">
                <div class="grid gap-8 auto-rows-min">
                    <article class="flex flex-col gap-4">
                        <p class="pl-4 border-l-2 border-zinc-900">J'ai fait appel à Benjamin pour refaire mon site internet. Je recherchais quelqu'un de bien organisé et réactif, et je suis super bien tombée ! Benjamin était à l'écoute de mes demandes et besoins, et j'ai senti qu'il s'est vraiment investi pour mon projet. Je sais que si j'ai le moindre souci, je peux compter sur lui pour le régler rapidement. Je le recommande sans hésitation pour vos projets web !
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
                        <div class="flex flex-col gap-2 pl-4 border-l-2 border-zinc-900">
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
                        <div class="flex flex-col gap-2 pl-4 border-l-2 border-zinc-900">
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
</main>


<?php snippet('footer') ?>

use Kirby\Cms\Url;
