<?php

namespace BenjaminHaeberli\Portfolio\ValueObjects;

final class Url
{
    final public function __construct(protected string $url)
    {
        $this->url = filter_var($url, FILTER_VALIDATE_URL) && curl_init($url) !== false ? $url : '';
    }

    public function toString(): string
    {
        return $this->url;
    }
}
