<?php

declare(strict_types=1);

namespace App;

use PHPUnit\Framework\TestCase;

class TestClassTest extends TestCase
{
    public function testWhoAmI(): void
    {
        $this->assertEquals(TestClass::class, (new TestClass())->whoAmI());
    }
}
