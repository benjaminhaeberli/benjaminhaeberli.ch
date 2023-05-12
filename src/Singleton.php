<?php

declare(strict_types=1);

namespace BenjaminHaeberli\Portfolio;

trait Singleton
{
    private static ?self $instance = null;

    final private function __construct()
    {
        $this->init();
    }

    abstract private function init(): void;

    final public static function instance(): self
    {
        return static::$instance ?? (static::$instance  = new self());
    }
}
