<?php

use BenjaminHaeberli\Portfolio\ComposerHelper;

$packages = ComposerHelper::getPackages();
?>

<?php if ($packages !== []) : ?>
    <div class="flex flex-col gap-2">
        <h2 class="text-2xl font-bold">
            Dépendances PHP
        </h2>
        <p>Les librairies utilisées pour développer ce site sont listées ci-dessous. Le code complet de ce dernier est disponible sur <a href="https://github.com/benjaminhaeberli/benjaminhaeberli.ch/" target="_blank" class="bh__href">ce repôt GitHub</a>.</p>
        <ul class="z-10 grid grid-cols-1 gap-2 p-2 text-sm md:p-8 md:grid-cols-2 bg-zinc-900/20">
            <?php foreach ($packages as $package) : ?>
                <li class="flex gap-1">
                    <?php if ($package->url->toString() !== '' && $package->url->toString() !== '0') : ?>
                        <a href="<?= $package->url->toString() ?>" class="bh__dark-href" target="_blank"><?= $package->name ?></a>
                    <?php else : ?>
                        <span><?= $package->name ?></span>
                    <?php endif; ?>
                    <span>-</span>
                    <span><?= $package->version ?></span>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>

<?php endif; ?>
