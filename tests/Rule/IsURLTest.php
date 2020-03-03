<?php

namespace Tests\Morebec\Validator\Rule;


use Morebec\Validator\Rule\isUrl;
use PHPUnit\Framework\TestCase;

class IsURLTest extends TestCase
{
    public function testValidate()
    {
        $rule = new IsURL();
        $this->assertTrue($rule->validate('https://www.google.com'));
        $this->assertFalse($rule->validate('a'));
    }
}