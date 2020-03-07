<?php

namespace Tests\Morebec\Validator\Rule;

use Morebec\Validator\Rule\IsNotNull;
use PHPUnit\Framework\TestCase;

class IsNotNullTest extends TestCase
{
    public function testValidate()
    {
        $rule = new IsNotNull();
        $this->assertFalse($rule->validate(null));
        $this->assertTrue($rule->validate(0));
        $this->assertTrue($rule->validate(''));
        $this->assertTrue($rule->validate(0));
        $this->assertTrue($rule->validate($rule));
    }
}
