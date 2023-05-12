<?php

use Kirby\Cms\File;
use Kirby\Cms\Page;

class DefaultPage extends Page
{
    public function getMeta(): string
    {
        return 'meta test';
    }
    public function getSeoImage(): File
    {
        $image_path = page()->content('fr')->get('cover');
        $image = image($image_path);
        if (!$image instanceof File) {
            return File::factory([]);
        }
        return $image->crop(1280, 720);
    }
}
