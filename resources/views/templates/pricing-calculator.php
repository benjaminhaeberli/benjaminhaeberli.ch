<?php

$dotClass = 'calculator-dot flex items-center justify-center size-8 sm:size-9 rounded-full border-2 border-neutral-50/15 text-neutral-50/40 text-xs sm:text-sm font-semibold shrink-0 transition-all duration-300';
$lineClass = 'w-6 sm:w-10 h-0.5 bg-neutral-50/10 shrink-0';
$optionClass = 'calculator-option flex flex-col gap-1 p-4 rounded-lg border border-neutral-50/10 bg-neutral-600/5 text-left cursor-pointer transition-colors hocus:bg-neutral-600/15';

?>

<?php snippet('header') ?>

<main class="flex flex-col mt-8 sm:mt-24">
    <section class="flex px-4 md:px-16 lg:px-0 pt-8 pb-24">
        <div id="calculator" class="flex flex-col mx-auto gap-8 w-full max-w-screen-md"
             data-cta-url="<?= $page->cta_url()->or('https://calendly.com/benjaminhaeberli/visioconference') ?>"
             data-contact-url="<?= $page->contact_url()->or('https://tally.so/r/n08Eey') ?>">

            <!-- Intro -->
            <div class="text-center space-y-2">
                <h1 class="text-2xl font-bold sm:text-4xl">
                    <?= $page->intro_title()->or('Quel site web pour votre projet ?') ?>
                </h1>
                <?php if ($page->intro_text()->isNotEmpty()) : ?>
                    <p class="text-neutral-300 text-base sm:text-lg">
                        <?= $page->intro_text() ?>
                    </p>
                <?php endif ?>
            </div>

            <!-- Progress -->
            <div class="flex items-center justify-center">
                <button class="<?= $dotClass ?> is-active" data-goto="1"><span>1</span></button>
                <div class="<?= $lineClass ?>"></div>
                <button class="<?= $dotClass ?>" data-goto="2"><span>2</span></button>
                <div class="<?= $lineClass ?>"></div>
                <button class="<?= $dotClass ?>" data-goto="3"><span>3</span></button>
                <div class="<?= $lineClass ?>"></div>
                <button class="<?= $dotClass ?>" data-goto="4"><span>4</span></button>
                <div class="<?= $lineClass ?>"></div>
                <button class="<?= $dotClass ?>" data-goto="5"><span>5</span></button>
                <div class="<?= $lineClass ?>"></div>
                <button class="<?= $dotClass ?>" data-goto="6"><span>6</span></button>
            </div>

            <!-- Step 1 : Type de site -->
            <div class="calculator-step is-active" data-step="1">
                <h2 class="text-lg font-bold text-center">Quel type de site recherchez-vous ?</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <button class="<?= $optionClass ?>" data-value="vitrine">
                        <span class="font-bold">Vitrine / Portfolio</span>
                        <span class="text-sm text-neutral-400">Présenter votre activité et vos services</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="blog">
                        <span class="font-bold">Blog / Magazine</span>
                        <span class="text-sm text-neutral-400">Publier du contenu régulièrement</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="ecommerce">
                        <span class="font-bold">E-commerce</span>
                        <span class="text-sm text-neutral-400">Vendre des produits en ligne</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="mixte">
                        <span class="font-bold">Site mixte</span>
                        <span class="text-sm text-neutral-400">Combiner plusieurs fonctionnalités</span>
                    </button>
                </div>
            </div>

            <!-- Step 2 : Nombre de pages -->
            <div class="calculator-step" data-step="2">
                <h2 class="text-lg font-bold text-center">Combien de pages environ ?</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <button class="<?= $optionClass ?>" data-value="1-10">
                        <span class="font-bold">1 – 10 pages</span>
                        <span class="text-sm text-neutral-400">Site compact, essentiel</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="10-30">
                        <span class="font-bold">10 – 30 pages</span>
                        <span class="text-sm text-neutral-400">Site moyen, structuré</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="30-100">
                        <span class="font-bold">30 – 100 pages</span>
                        <span class="text-sm text-neutral-400">Site conséquent</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="100+">
                        <span class="font-bold">100+ pages</span>
                        <span class="text-sm text-neutral-400">Grand site ou portail</span>
                    </button>
                </div>
            </div>

            <!-- Step 3 : Multilingue -->
            <div class="calculator-step" data-step="3">
                <h2 class="text-lg font-bold text-center">Votre site doit-il être multilingue ?</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <button class="<?= $optionClass ?>" data-value="none">
                        <span class="font-bold">1 langue</span>
                        <span class="text-sm text-neutral-400">Français, allemand ou autre</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="2">
                        <span class="font-bold">2 langues</span>
                        <span class="text-sm text-neutral-400">Bilingue (ex : FR + DE)</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="3-5">
                        <span class="font-bold">3 – 5 langues</span>
                        <span class="text-sm text-neutral-400">Multilingue</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="5+">
                        <span class="font-bold">5+ langues</span>
                        <span class="text-sm text-neutral-400">International</span>
                    </button>
                </div>
            </div>

            <!-- Step 4 : E-commerce -->
            <div class="calculator-step" data-step="4">
                <h2 class="text-lg font-bold text-center">Avez-vous besoin de vendre en ligne ?</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <button class="<?= $optionClass ?>" data-value="none">
                        <span class="font-bold">Non</span>
                        <span class="text-sm text-neutral-400">Pas de vente en ligne</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="small">
                        <span class="font-bold">Petit catalogue</span>
                        <span class="text-sm text-neutral-400">Moins de 25 produits</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="medium">
                        <span class="font-bold">Catalogue moyen</span>
                        <span class="text-sm text-neutral-400">25 à 100 produits</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="large">
                        <span class="font-bold">Grand catalogue</span>
                        <span class="text-sm text-neutral-400">Plus de 100 produits</span>
                    </button>
                </div>
            </div>

            <!-- Step 5 : Fréquence de mises à jour -->
            <div class="calculator-step" data-step="5">
                <h2 class="text-lg font-bold text-center">À quelle fréquence mettrez-vous le contenu à jour ?</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <button class="<?= $optionClass ?>" data-value="rare">
                        <span class="font-bold">Rarement</span>
                        <span class="text-sm text-neutral-400">Quelques fois par an</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="monthly">
                        <span class="font-bold">Mensuelle</span>
                        <span class="text-sm text-neutral-400">1 à 2 fois par mois</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="weekly">
                        <span class="font-bold">Hebdomadaire</span>
                        <span class="text-sm text-neutral-400">Chaque semaine</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="daily">
                        <span class="font-bold">Quotidienne</span>
                        <span class="text-sm text-neutral-400">Tous les jours ou presque</span>
                    </button>
                </div>
            </div>

            <!-- Step 6 : Budget -->
            <div class="calculator-step" data-step="6">
                <h2 class="text-lg font-bold text-center">Quel est votre budget approximatif ?</h2>
                <p class="text-sm text-neutral-400 text-center">Optionnel — vous pouvez passer cette étape</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <button class="<?= $optionClass ?>" data-value="under-2k">
                        <span class="font-bold">Moins de 2'000 CHF</span>
                        <span class="text-sm text-neutral-400">Budget serré</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="2k-5k">
                        <span class="font-bold">2'000 – 5'000 CHF</span>
                        <span class="text-sm text-neutral-400">Budget standard</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="5k-10k">
                        <span class="font-bold">5'000 – 10'000 CHF</span>
                        <span class="text-sm text-neutral-400">Budget confortable</span>
                    </button>
                    <button class="<?= $optionClass ?>" data-value="10k+">
                        <span class="font-bold">10'000+ CHF</span>
                        <span class="text-sm text-neutral-400">Projet ambitieux</span>
                    </button>
                </div>
            </div>

            <!-- Results (populated by JS) -->
            <div class="calculator-step" data-step="results"></div>

            <!-- Navigation -->
            <div id="calculator-nav" class="flex justify-between items-center max-w-screen-xs mx-auto w-full">
                <button id="calc-prev" class="px-5 py-2 rounded-md font-semibold text-sm text-neutral-400 hocus:text-neutral-100 transition-colors invisible">
                    Précédent
                </button>
                <button id="calc-next" class="px-5 py-2 rounded-md font-semibold text-sm text-white bg-gradient-to-r from-pink-500/70 to-yellow-500/70 hocus:from-pink-500/50 hocus:to-yellow-500/50 disabled:opacity-30 disabled:cursor-not-allowed" disabled>
                    Suivant
                </button>
                <button id="calc-submit" class="px-5 py-2 rounded-md font-semibold text-sm text-white bg-gradient-to-r from-pink-500/70 to-yellow-500/70 hocus:from-pink-500/50 hocus:to-yellow-500/50 hidden">
                    Voir les résultats
                </button>
            </div>

        </div>
    </section>
</main>

<?php snippet('footer') ?>
