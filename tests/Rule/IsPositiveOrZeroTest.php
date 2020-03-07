<?php

namespace Tests\Morebec\Validator\Rule;

use Morebec\Validator\Rule\IsPositiveOrZero;
use PHPUnit\Framework\TestCase;

class IsPositiveOrZeroTest extends TestCase
{
    public function testValidate()
    {
        $rule = new IsPositiveOrZero();
        $this->assertTrue($rule->validate(0));
        $this->assertTrue($rule->validate(1));
        $this->assertFalse($rule->validate(-1));
    }
}
