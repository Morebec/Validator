<?php

namespace Tests\Morebec\Validator\Rule;

use Morebec\Validator\Rule\NotEmpty;
use PHPUnit\Framework\TestCase;

class NotEmptyTest extends TestCase
{
    public function testValidate()
    {
        $rule = new NotEmpty();
        $this->assertTrue($rule->validate([1, 2]));
        $this->assertFalse($rule->validate([]));
        $ruleSecond = new NotEmpty('Custom message');
        $this->assertEquals('Custom message', $ruleSecond->getMessage('arr'));
        $this->assertEquals("The value of 'arr' was not expected to be empty", $rule->getMessage('arr'));
    }
}
