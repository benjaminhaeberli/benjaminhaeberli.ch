<?php

use BenjaminHaeberli\Portfolio\KirbyHelper;

?>

<?php if (KirbyHelper::pageHasField('submenu')) : ?>
    <nav class="container flex flex-col gap-4 mx-auto my-3 font-medium ">
        <ul class="flex flex-wrap gap-4 px-4 m-auto text-sm lg:p-0 lg:m-0 ">
            <?php
            $links = page()->submenu()->toStructure();
            foreach ($links as $link) : ?>
                <li class="flex ">
                    <a href="#<?= $link->slug() ?>" class="flex items-center px-1 text-neutral-400 outline-neutral-400 outline-dotted hocus:outline-neutral-500 outline-2 hocus:text-neutral-100">
                        <?= $link->title() ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>
<?php endif; ?>