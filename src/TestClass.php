<?php

declare(strict_types=1);

namespace App;

class TestClass
{
    public function whoAmI(): string
    {
        return TestClass::class;
    }
}