<?php

use Treast\KirbyDebugbar\Debugbar;

if (!function_exists('debug')) {
    function debug(): Treast\KirbyDebugbar\Logger
    {
        return Debugbar::getLogger();
    }
}
