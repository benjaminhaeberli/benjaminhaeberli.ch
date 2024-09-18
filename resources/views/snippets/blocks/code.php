<?php

use Kirby\Toolkit\I18n;

$highlighter = new \Tempest\Highlight\Highlighter();
/** @var \Kirby\Cms\Block $block */
$code = '<code>' . $highlighter->parse($block->code()->value, 'php') . '</code>';
?>

<div class="relative text-xs group">
    <button class="absolute hidden gap-2 uppercase group-hover:flex top-4 right-4" data-code-id="<?= $block->id() ?>">
        <span data-icon="copy-icon"><?= snippet('svg/icons/remixicon-file-copy-line') ?></span>
        <span class="hidden" data-icon="copied-icon"><?= snippet('svg/icons/remixicon-check-line') ?></span>
        <span><?= I18n::translate('actions.copy') ?></span>
    </button>
    <pre id="code-<?= $block->id() ?>" class="p-8 overflow-scroll leading-relaxed bg-gray-950 bg-gradient-to-t from-indigo-400/5 to-transparent rounded-2xl"><?= $code ?></pre>
</div>

