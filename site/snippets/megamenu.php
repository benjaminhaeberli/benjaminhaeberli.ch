<?php

use BenjaminHaeberli\Portfolio\KirbyHelper;

?>

<?php if (KirbyHelper::siteHasField('megamenu')) : ?>
    <nav class="flex justify-between gap-2 pb-4 mx-auto text-lg font-semibold border-b-2 border-zinc-800">
        <ol class="flex gap-2">
            <?php
            $links = site()->megamenu()->toStructure();
            foreach ($links as $link) : ?>
                <?php $page = $link->target_page()->toPage() ?>
                <?php if (($page = KirbyHelper::isPage($page)) instanceof \Kirby\Cms\Page && $link->visible()->toBool()) : ?>
                    <li class="flex">
                        <?php if (page()->is($page)) : ?>
                            <a href="#" class="flex items-center gap-2 px-2 py-2 group text-primary hover:text-secondary focus:text-slate-200 focus:outline-dashed outline-2 ">
                            <?php else : ?>
                                <a href="<?= $page->url() ?>" class="flex items-center gap-2 px-2 py-2 group hocus:text-primary focus:outline-dashed outline-2">
                                <?php endif; ?>
                                <?= $link->svg_icon() ?>
                                <span> <?= $page->title() ?></span>
                                </a>
                    </li>
                <?php endif; ?>
            <?php endforeach ?>
        </ol>
        <div>
            <a href="https://tally.so/r/n08Eey" target="_blank" class="bh__btn">Contactez-moi !</a>
        </div>
    </nav>
<?php endif; ?>
