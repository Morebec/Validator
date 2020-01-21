<?php

namespace Tests\Morebec\Validator\Rule;

use Morebec\Validator\Rule\IsBoolean;
use Morebec\Validator\Rule\One;
use PHPUnit\Framework\TestCase;

class OneTest extends TestCase
{

    public function testValidate()
    {
        $rule = new One(new IsBoolean());
        $this->assertTrue($rule->validate(true));
        $this->assertFalse($rule->validate('not a bool'));
    }
}
