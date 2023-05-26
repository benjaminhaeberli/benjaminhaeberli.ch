<?php

use KirbySeo\KirbySeo;
use Kirby\Cms\App;
use Kirby\Cms\Page;
use Kirby\Cms\Site;

return fn(Page $page, App $kirby, Site $site): array => [
    'kirbyseo' => new KirbySeo($page, $kirby, $site)
];
