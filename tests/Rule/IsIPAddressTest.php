<?php

namespace Rule;

use Morebec\Validator\Rule\IsIPAddress;
use PHPUnit\Framework\TestCase;

class IsIPAddressTest extends TestCase
{
    public function testValidate()
    {
        $rule = new IsIPAddress();
        $this->assertTrue($rule->validate('192.168.1.1'));
        $this->assertFalse($rule->validate('275.265.11.1'));
        $this->assertFalse($rule->validate('test'));
        $this->assertFalse($rule->validate('domain.com'));
        $this->assertFalse($rule->validate(true));
        $this->assertFalse($rule->validate(false));
        $this->assertFalse($rule->validate(1));
        $this->assertFalse($rule->validate(0));
        $this->assertFalse($rule->validate([]));
    }
}
