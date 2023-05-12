<?php

namespace BenjaminHaeberli\Utils;

final class Seo
{
    public static function metaTwitterCard(): string
    {
        return 'summary_large_image';
    }

    public static function metaFacebookSitename(): mixed
    {
        return kirby()->site()->content()->get('title');
    }

    public static function metaFacebookType(): string
    {
        return 'website';
    }
}
