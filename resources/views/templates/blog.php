<?php
$highlighter = new \Tempest\Highlight\Highlighter();

$code = $highlighter->parse(htmlentities("<?php

use Treast\KirbyDebugbar\Debugbar;

if (!function_exists('debug')) {
    function debug(): Treast\KirbyDebugbar\Logger
    {
        return Debugbar::getLogger();
    }
}"), 'php');


?>

<?php snippet('header') ?>

<main class="flex flex-col mt-32">
    <section class="flex px-4 pt-24 md:px-16 lg:px-0">
        <div class="flex flex-col gap-1 mx-auto">
            <h1 class="text-4xl font-bold text-center">
                <?= page()->title() ?>
            </h1>
            <?= page()->message()->kt() ?>


            <div>
                <a href="/" class="underline hover:no-underline ">Retour à l'accueil</a>
            </div>

            <pre class="text-black bg-white"><code><?= $code ?></code></pre>
        </div>
    </section>
</main>

<?php snippet('footer') ?>