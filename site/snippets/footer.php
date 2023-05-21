<?php

use Kirby\Cms\Html;

?>
<footer>
    <nav class="container flex justify-between max-w-screen-lg py-8 mx-auto mt-12 border-t-2 border-gray-300 border-dashed text-slate-600">
        <ol class="flex flex-col gap-1 px-8 text-sm md:px-16 lg:px-0">
            <li>
                Icônes de heroicons.com et remixicon.com. Site codé avec Kirby et Tailwind CSS.
            </li>
            <li class="text-slate-900">
                <a href="/mentions-legales">Mentions légales</a>
            </li>
        </ol>
    </nav>
</footer>

<?= Html::js('assets/app.js', 'defer') ?>
<script defer data-domain="benjaminhaeberli.ch" src="https://collect.benjaminhaeberli.ch/assets/collect.js" nonce="<?= site()->nonce() ?>"></script>
</body>

</html>
