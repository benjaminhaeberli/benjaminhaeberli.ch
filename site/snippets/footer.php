<?php

use Kirby\Cms\Html;

?>
<footer class="container flex justify-between max-w-screen-lg py-8 mx-auto mt-12 text-sm border-t-2 border-gray-300 border-dashed">
    <nav class="fixed left-8 bottom-6">
        <a href="#" class="bh__svg-up">Haut de page</a>
    </nav>
    <nav class="flex">
        <ol class="flex gap-4 px-8 md:px-16 lg:px-0">
            <li>
                <a href="/mentions-legales" class="bh__dark-href">Mentions légales</a>
            </li>
            <li>
                <a href="/credits" class="bh__dark-href">Crédits</a>
            </li>
        </ol>
    </nav>
    <p>
        Code et design © <a href="/" class="bh__dark-href">Benjamin Haeberli</a>
    </p>
</footer>

<?= Html::js('assets/app.js', 'defer') ?>
<script defer data-domain="benjaminhaeberli.ch" src="https://collect.benjaminhaeberli.ch/assets/collect.js" nonce="<?= site()->nonce() ?>"></script>
</body>

</html>
