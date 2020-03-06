<?php

namespace Rule;

use Morebec\Validator\Rule\IsArray;
use PHPUnit\Framework\TestCase;

class IsArrayTest extends TestCase
{
    public function testValidate()
    {
        $rule = new IsArray();
        $this->assertTrue($rule->validate([]));
        $this->assertFalse($rule->validate(1));
        $this->assertFalse($rule->validate('string'));
        $this->assertFalse($rule->validate(true));
    }
}
