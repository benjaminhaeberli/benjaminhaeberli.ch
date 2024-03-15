<?php

use Bnomei\ModelHasBoost;
use Kirby\Cms\File;
use Kirby\Cms\FileVersion;
use Kirby\Cms\Page;

class DefaultPage extends Page
{
    use ModelHasBoost;

    public function getMeta(): string
    {
        return 'meta test';
    }
    public function getSeoImage(): File|FileVersion
    {
        $image_path = page()->content('fr')->get('cover');
        $image = image($image_path);
        if (!$image instanceof File) {
            return File::factory([]);
        }
        return $image->crop(1280, 720);
    }
}
