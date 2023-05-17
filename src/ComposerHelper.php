<?php

namespace BenjaminHaeberli\Portfolio;

use BenjaminHaeberli\Portfolio\ValueObjects\ComposerPackage;
use Composer\InstalledVersions;

final class ComposerHelper
{
    /**
     * @return array<ComposerPackage>
     */
    public static function getPackages(): array
    {
        $rawData = InstalledVersions::getAllRawData();
        $packages = [];

        foreach ($rawData[0]['versions'] as $packageName => $packageData) {
            if (array_key_exists('pretty_version', $packageData)) {
                $packages[] = new ComposerPackage($packageName, $packageData['pretty_version']);
            }
        }

        // Remove first line (this repository)
        unset($packages[0]);

        return $packages;
    }
}
