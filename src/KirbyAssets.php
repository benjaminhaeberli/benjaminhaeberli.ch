<?php

namespace BenjaminHaeberli\Portfolio;

use Kirby\Cms\App;
use Kirby\Cms\Html;
use Kirby\Filesystem\F;

final class KirbyAssets
{
    /**
     * Creates one versioned CSS link tag
     *
     * @param string $relative_url Relative file url like `assets/public.css`
     * @param string|mixed[] $options
     */
    public static function versionedCss(string $relative_url, string|array $options = null): string
    {
        $filemtime = static::filemtime($relative_url);

        if ($filemtime !== 0 && $filemtime !== false) {
            return Html::css($relative_url . '?v=' . $filemtime, $options);
        }

        return '';
    }

    /**
     * Creates a versioned script tag to load a javascript file
     *
     * @param string $relative_url Relative file url like `assets/app.js`
     * @param string|mixed[] $options
     */
    public static function versionedJs(string $relative_url, string|array $options = null): string
    {
        $filemtime = static::filemtime($relative_url);

        if ($filemtime !== 0 && $filemtime !== false) {
            return Html::js($relative_url . '?v=' . $filemtime, $options);
        }

        return '';
    }

    /**
     * Execute `filemtime()` for a given relative file url
     *
     * @param string $relative_url Relative file url (example : `assets/public.css`)
     */
    public static function filemtime(string $relative_url): int|false
    {
        $filename = App::instance()->root('index') . DIRECTORY_SEPARATOR . $relative_url;

        if (!F::exists($filename)) {
            throw new \Exception("File doesn't exist : '{$filename}'");
        }

        return filemtime($filename);
    }
}
