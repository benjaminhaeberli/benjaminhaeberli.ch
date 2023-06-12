<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\ArrowFunction\AddArrowFunctionReturnTypeRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictTypedCallRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/site/config',
        __DIR__ . '/site/languages',
        __DIR__ . '/site/snippets',
        __DIR__ . '/site/templates',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    $rectorConfig->autoloadPaths([
        './src/bootstrap.php'
    ]);

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_81,
        SetList::PHP_81,
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::PRIVATIZATION,
        SetList::TYPE_DECLARATION,
    ]);

    $rectorConfig->skip([
        ReturnTypeFromStrictTypedCallRector::class => [
            __DIR__ . '/site/config/routes.php',
        ],
        AddArrowFunctionReturnTypeRector::class
    ]);
};
