<?php

namespace BenjaminHaeberli\Portfolio\ValueObjects;

final class ComposerPackage
{
    final public const PACKAGIST_URL = "https://packagist.org/packages/";

    public readonly Url $url;

    final public function __construct(public readonly string $name, public readonly ?string $version = null)
    {
        $this->url = new Url(self::PACKAGIST_URL . $name);
    }
}
