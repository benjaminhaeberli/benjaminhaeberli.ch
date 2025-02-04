<?php

use PHPIcons\PHPIcons;

if (! function_exists('formatDate')) {
    function formatDate(string $dateString): void
    {
        $locale = 'fr_CH';
        $dateType = IntlDateFormatter::LONG; // type of date formatting
        $timeType = IntlDateFormatter::NONE; // type of time formatting setting to none, will give you date itself
        $formatter = new IntlDateFormatter($locale, $dateType, $timeType);
        $dateTime = new DateTime($dateString);
        echo $formatter->format($dateTime);
    }
}

if (! function_exists('icon')) {
    /**
     * Provides convenient access to rendering an icon with optional attributes using the PHPIcons class
     *
     * @param  array<string, string>  $attributes
     */
    function icon(string $iconKey, array $attributes = []): string
    {
        $phpicons = (new PHPIcons(kirby()->root('base').DIRECTORY_SEPARATOR.'php-icons.php'));

        return (string) $phpicons
            ->icon($iconKey)
            ->attributes($attributes);
    }
}
