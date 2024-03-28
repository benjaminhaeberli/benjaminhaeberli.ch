<?php

use Treast\KirbyDebugbar\Debugbar;

if (!function_exists('debug')) {
    function debug(): Treast\KirbyDebugbar\Logger
    {
        return Debugbar::getLogger();
    }
}

if (!function_exists('formatDate')) {
    function formatDate(string $dateString): void
    {
        $locale = "fr_CH";
        $dateType = IntlDateFormatter::LONG; //type of date formatting
        $timeType = IntlDateFormatter::NONE; //type of time formatting setting to none, will give you date itself
        $formatter = new IntlDateFormatter($locale, $dateType, $timeType);
        $dateTime = new DateTime($dateString);
        echo $formatter->format($dateTime);
    }
}
