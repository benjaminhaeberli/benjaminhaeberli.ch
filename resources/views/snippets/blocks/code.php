<?php

$highlighter = new \Tempest\Highlight\Highlighter();
/** @var \Kirby\Cms\Block $block */
$code = $highlighter->withGutter()->parse($block->code()->value, 'php');

?>
<pre class="overflow-scroll text-sm">
    <code><?= $code ?></code>
</pre>
