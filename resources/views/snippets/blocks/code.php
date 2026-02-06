<?php

use Kirby\Toolkit\I18n;

$highlighter = new \Tempest\Highlight\Highlighter;
/** @var \Kirby\Cms\Block $block */
$code = '<code>'.$highlighter->parse($block->code()->value, $block->language()).'</code>';

// https://getkirby.com/docs/reference/panel/blocks/code
?>

<div class="relative text-xs group">
    <button class="absolute hidden gap-2 uppercase group-hover:flex top-4 right-4" data-code-id="<?= $block->id() ?>">
        <span data-code="copy"><?= icon('lucide:copy', ['class' => 'text-sm']) ?></span>
        <span data-code="copied" class="hidden" ><?= icon('lucide:check', ['class' => 'text-sm']) ?></span>
        <span data-code="copy"><?= I18n::translate('actions.copy') ?></span>
        <span data-code="copied" class="hidden" ><?= I18n::translate('actions.copied') ?></span>
    </button>
    <pre id="code-<?= $block->id() ?>" class="p-8 overflow-scroll leading-relaxed bg-neutral-900 rounded-2xl"><?= $code ?></pre>
</div>

