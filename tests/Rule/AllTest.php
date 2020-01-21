<?php

namespace Tests\Morebec\Validator\Rule;

use Morebec\Validator\Rule\All;
use Morebec\Validator\Rule\IsNumeric;
use Morebec\Validator\Rule\IsPositiveOrZero;
use PHPUnit\Framework\TestCase;

class AllTest extends TestCase
{
    public function testValidate()
    {
        // A Numeric positive number
        $rule = new All([
            new IsNumeric(),
            new IsPositiveOrZero()
        ]);

        $this->assertTrue($rule->validate(9));
        $this->assertFalse($rule->validate(-7));
        $this->assertFalse($rule->validate('ok'));
    }
}
