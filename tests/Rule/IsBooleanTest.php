<?php

namespace Rule;

use Morebec\Validator\Rule\IsBoolean;
use PHPUnit\Framework\TestCase;

class IsBooleanTest extends TestCase
{
    public function testValidate()
    {
        $rule = new IsBoolean();

        $this->assertTrue($rule->validate(true));
        $this->assertTrue($rule->validate(false));
        $this->assertFalse($rule->validate(0));
        $this->assertFalse($rule->validate(1));
        $this->assertFalse($rule->validate('string'));
        $this->assertFalse($rule->validate([]));
    }
}
