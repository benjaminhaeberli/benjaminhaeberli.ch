<?php

use Kirby\Cms\Page;

class DefaultPage extends Page
{
    public function getMeta()
    {
        return 'meta test';
    }
    public function getSeoImage()
    {
        $image = $this->content()->get('seoimage');
        return $image->toFile() ? $image->toFile()->crop(1280, 720)->url() : ' ';
    }
}
