<?php

use BenjaminHaeberli\Portfolio\ComposerHelper;

?>

<?php snippet('header') ?>

<main class="flex flex-col gap-16">
    <section class="container max-w-screen-md mx-auto">
        <div class="flex flex-col gap-4 px-8 mx-auto text-slate-900 md:px-16 lg:px-0">
            <h1 class="text-4xl font-bold">
                Mentions légales
            </h1>
            <div class="bh__kirbytext">
                <?= page()->main_content()->kt() ?>
            </div>
            <?php if (!empty($packages = ComposerHelper::getPackages())) : ?>
                <h2 class="text-2xl font-bold">
                    Code du site
                </h2>
                <p>Les librairies PHP utilisées pour développer ce site sont listées ci-dessous. Le code complet de ce dernier est disponible sur <a href="https://github.com/benjaminhaeberli/benjaminhaeberli.ch/" target="_blank" class="href">ce repôt GitHub</a>.</p>
                <ul class="z-10 grid grid-cols-1 gap-2 p-2 text-sm md:p-8 md:grid-cols-2 bg-blue-50">
                    <?php foreach ($packages as $package) : ?>
                        <li class="flex gap-1">
                            <?php if ($package->url->toString() !== '' && $package->url->toString() !== '0') : ?>
                                <a href="<?= $package->url->toString() ?>" class="bh__basic-href-dark" target="_blank"><?= $package->name ?></a>
                            <?php else : ?>
                                <span><?= $package->name ?></span>
                            <?php endif; ?>
                            <span>-</span>
                            <span><?= $package->version ?></span>
                        </li>
                    <?php endforeach; ?>

                </ul>
            <?php endif; ?>
    </section>
</main>


<?php snippet('footer') ?>
