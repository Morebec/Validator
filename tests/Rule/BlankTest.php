<?php

namespace Rule;

use Morebec\Validator\Rule\Blank;
use PHPUnit\Framework\TestCase;

class BlankTest extends TestCase
{

    public function testValidate()
    {
        $rule = new Blank();
        $this->assertTrue($rule->validate(''));
        $this->assertFalse($rule->validate('not blank'));
    }
}
