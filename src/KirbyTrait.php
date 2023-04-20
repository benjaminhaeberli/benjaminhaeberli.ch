<?php

namespace BenjaminHaeberli;

use Kirby\Cms\App;

trait KirbyTrait
{
    private static function kirby(): \Kirby\Cms\App
    {
        return App::instance();
    }
}
