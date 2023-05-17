<?php

use BenjaminHaeberli\Portfolio\ComposerHelper;

?>

<?php snippet('header') ?>

<main class="flex flex-col gap-16">
    <section class="container max-w-screen-md mx-auto">
        <div class="flex flex-col gap-4 text-slate-900">
            <h1 class="text-4xl font-bold">
                Mentions légales
            </h1>
            <div class="kirbytext">
                <?= page()->main_content()->kt() ?>
            </div>
            <?php if (!empty($packages = ComposerHelper::getPackages())) : ?>
                <h2 class="text-2xl font-bold">
                    Librairies PHP
                </h2>
                <p>Le code complet de ce site est disponible sur <a href="https://github.com/benjaminhaeberli/benjaminhaeberli.ch/" target="_blank" class="href">ce repôt GitHub</a>.</p>
                <ul class="p-4 text-sm bg-blue-50">
                    <?php foreach ($packages as $package) : ?>
                        <li class="flex gap-2">
                            <span><?= $package['name'] ?></span>
                            <span>-</span>
                            <span><?= $package['version'] ?></span>
                        </li>
                    <?php endforeach; ?>

                </ul>
            <?php endif; ?>
    </section>
</main>


<?php snippet('footer') ?>
