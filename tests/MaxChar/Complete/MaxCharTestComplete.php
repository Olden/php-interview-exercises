<?php

declare(strict_types=1);

namespace Tests\MaxChar\Complete;

use Exercises\MaxChar\Complete\MaxCharComplete;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class MaxCharTestComplete extends TestCase
{
    public function testHasGet(): void
    {
        self::assertTrue(
            method_exists(MaxCharComplete::class, 'get'),
            'Class does not have static method get'
        );
    }

    public function testGetSingleMaxChar(): void
    {
        self::assertSame('a', MaxCharComplete::get('a'));
    }

    public function testGetMaxChar(): void
    {
        self::assertSame('q', MaxCharComplete::get('qqweqrty'));
    }

    public function testGetMaxCharWithNumbers(): void
    {
        self::assertSame('2', MaxCharComplete::get('apple 2202'));
    }
}
