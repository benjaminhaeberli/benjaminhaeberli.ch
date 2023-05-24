<?php

use KirbySeo\KirbySeo;
use Kirby\Cms\App;
use Kirby\Cms\Page;
use Kirby\Cms\Site;

return function (Page $page, App $kirby, Site $site) {
    return [
        'kirbyseo' => new KirbySeo($page, $kirby, $site)
    ];
};
