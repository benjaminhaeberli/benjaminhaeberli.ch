<?php

use Kirby\Cms\Page;

class DefaultPage extends Page
{
    public function getMeta(): string
    {
        return 'meta test';
    }
    public function getSeoImage(): mixed
    {
        $image = $this->content()->get('seoimage');
        // $this->image()->crop()
        return $image->toFile() ? $image->toFile()->crop(1280, 720)->url() : ' ';
    }
}
