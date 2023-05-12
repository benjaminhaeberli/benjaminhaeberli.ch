<?php

namespace Tests;

use BenjaminHaeberli\Portfolio\Example;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Example::class,
            Example::fromString('user@example.com')
        );
    }
}
