<?php

namespace TheHeaviestClipsOfTheUniverse;

use Kirby\CMS\App;

trait KirbyTrait
{
    private static function kirby()
    {
        return App::instance();
    }
}
