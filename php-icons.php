<?php

declare(strict_types=1);

use PHPIcons\Config\PHPIconsConfig;

return PHPIconsConfig::configure()
    ->withPaths([
        __DIR__.DIRECTORY_SEPARATOR.'resources',
        __DIR__.DIRECTORY_SEPARATOR.'src',
        __DIR__.DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.'content',
    ])
    ->withDefaultPrefix('')
    ->withIdentifiers(['phpicon', 'icon'])
    ->withPlaceholder('�');
