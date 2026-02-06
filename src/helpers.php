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

// Configure the PHPIcons singleton with the correct config path
// The vendor's icon() function (from php-icons autoload) uses this singleton
PHPIconsSingleton::setInstance(new PHPIcons(dirname(__DIR__).DIRECTORY_SEPARATOR.'php-icons.php'));
