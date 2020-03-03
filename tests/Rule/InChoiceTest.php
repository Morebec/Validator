<?php

namespace Tests\Morebec\Validator\Rule;


use Morebec\Validator\Rule\InChoice;
use PHPUnit\Framework\TestCase;

class InChoiceTest extends TestCase
{
    public function testValidate()
    {
        $rule = new InChoice(['a','b','c']);
        $this->assertTrue($rule->validate('a'));
        $this->assertFalse($rule->validate('d'));
    }
}