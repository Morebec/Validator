<?php

namespace Tests\Morebec\Validator\Rule;

use Morebec\Validator\Rule\IsPositive;
use PHPUnit\Framework\TestCase;

class IsPositiveTest extends TestCase
{
    public function testValidate()
    {
        $rule = new IsPositive();
        $this->assertTrue($rule->validate(1));
        $this->assertFalse($rule->validate(0));
        $this->assertFalse($rule->validate(-1));
    }
}
