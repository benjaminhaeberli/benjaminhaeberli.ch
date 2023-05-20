<?php

use BenjaminHaeberli\Portfolio\ComposerHelper;

?>

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
