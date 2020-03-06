<?php

namespace Rule;

use Morebec\Validator\Rule\IsEmail;
use PHPUnit\Framework\TestCase;

class IsEmailTest extends TestCase
{
    public function testValidate()
    {
        $rule = new IsEmail();
        $this->assertTrue($rule->validate('email@domain.com'));
        $this->assertFalse($rule->validate('@domain.com'));
        $this->assertFalse($rule->validate('email.domain.com'));
        $this->assertFalse($rule->validate('domain.com'));
        $this->assertFalse($rule->validate(true));
        $this->assertFalse($rule->validate(false));
        $this->assertFalse($rule->validate(1));
        $this->assertFalse($rule->validate(0));
        $this->assertFalse($rule->validate([]));
    }
}
