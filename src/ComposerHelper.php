<?php

namespace BenjaminHaeberli\Portfolio;

use Composer\InstalledVersions;

final class ComposerHelper
{
    public static function getPackages(): array
    {
        $rawData = InstalledVersions::getAllRawData();
        $packages = [];

        foreach ($rawData[0]['versions'] as $packageName => $packageData) {
            if (array_key_exists('pretty_version', $packageData)) {
                $packages[] = [
                    'name' => $packageName,
                    'version' => $packageData['pretty_version']
                ];
            }
        }

        return $packages;
    }
}
