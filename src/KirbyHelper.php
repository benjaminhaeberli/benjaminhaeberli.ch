<?php

namespace BenjaminHaeberli\Portfolio;

use Kirby\Cms\Page;

final class KirbyHelper
{
    public static function pageHasField(string $field_key): bool
    {
        return in_array($field_key, page()->content()->keys());
    }

    public static function siteHasField(string $field_key): bool
    {
        return in_array($field_key, site()->content()->keys());
    }

    public static function isPage(mixed $page): Page|null
    {
        return $page instanceof Page ? $page : null;
    }
}
