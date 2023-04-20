<?php

namespace BenjaminHaeberli\Utils;

use BenjaminHaeberli\KirbyTrait;
use BenjaminHaeberli\SingletonTrait;

final class Seo
{
    use SingletonTrait;
    use KirbyTrait;

    public static function metaTwitterCard(): string
    {
        return 'summary_large_image';
    }

    public static function metaFacebookSitename(): string|null
    {
        return static::kirby()->site()->content()->get('title');
    }

    public static function metaFacebookType(): string
    {
        return 'website';
    }
}
