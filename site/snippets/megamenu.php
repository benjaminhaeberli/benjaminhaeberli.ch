<?php

use BenjaminHaeberli\Portfolio\KirbyHelper;

?>

<?php if (KirbyHelper::siteHasField('megamenu')) : ?>
    <nav class="container flex max-w-screen-xl gap-2 p-4 mx-auto font-medium border-2 text-slate-900">
        <ol class="flex gap-2">
            <?php
            $links = site()->megamenu()->toStructure();
            foreach ($links as $link) : ?>
                <?php $page = $link->target_page()->toPage() ?>
                <?php if (($page = KirbyHelper::isPage($page)) !== null) : ?>
                    <li class="flex">
                        <?php if (page()->is($page)) : ?>
                            <a href="#" class="flex items-center gap-2 px-2 py-2 group focus:bg-transparent text-slate-50 bg-slate-900 hover:bg-slate-800 focus:text-slate-200 focus:outline-dashed outline-2 ">
                            <?php else : ?>
                                <a href="<?= $page->url() ?>" class="flex items-center gap-2 px-2 py-2 group focus:bg-transparent hocus:text-slate-800 focus:outline-dashed outline-2">
                                <?php endif; ?>
                                <?= $link->svg_icon() ?>
                                <span> <?= $page->title() ?></span>
                                </a>
                    </li>
                <?php endif; ?>
            <?php endforeach ?>
        </ol>
    </nav>
<?php endif; ?>