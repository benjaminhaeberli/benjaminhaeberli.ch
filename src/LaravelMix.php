<?php

namespace BenjaminHaeberli\Portfolio;

use Kirby\Cms\App;

use Kirby\Data\Json;
use Kirby\Filesystem\F;
use Kirby\Cms\Html;

final class LaravelMix
{
    public static function css(string $folder, string $file,  string|array $options = null): string
    {
        $key = static::mix($folder, $file);

        return Html::css($folder . '/' . $key, $options);
    }

    public static function js(string $folder, string $file, string|array $options = null): string
    {
        $key = static::mix($folder, $file);

        return Html::js($folder . '/' . $key, $options);
    }

    private static function mix(string $folder, string $file): string
    {
        $manifest = App::instance()->root('index') . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . 'mix-manifest.json';

        if (!F::exists($manifest)) {
            throw new \Exception("Couldn't find Laravel Mix Manifest: '{$manifest}'");
        }

        $manifest = Json::read($manifest);
        $key = '/' . $file;

        if (!array_key_exists($key, $manifest)) {
            throw new \Exception("Laravel Mix couldn't locate '{$manifest}'");
        }

        return $manifest[$key];
    }
}
