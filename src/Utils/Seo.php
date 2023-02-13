<?php

namespace TheHeaviestClipsOfTheUniverse\Utils;

use TheHeaviestClipsOfTheUniverse\KirbyTrait;
use TheHeaviestClipsOfTheUniverse\SingletonTrait;

final class Seo
{
    use SingletonTrait, KirbyTrait;

    public static function metaTwitterCard()
    {
        return 'summary_large_image';
    }

    public static function metaFacebookSitename()
    {
        return static::kirby()->site()->content()->get('title');
    }

    public static function metaFacebookType()
    {
        return 'website';
    }
}
