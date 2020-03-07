<?php

namespace Tests\Morebec\Validator\Rule;

use Morebec\Validator\Rule\AtLeastOne;
use Morebec\Validator\Rule\IsNull;
use Morebec\Validator\Rule\IsPositive;
use PHPUnit\Framework\TestCase;

class AtLeastOneTest extends TestCase
{
    public function testValidate()
    {
        // A positive number or null
        $rule = new AtLeastOne([
            new IsPositive(),
            new IsNull(),
        ]);

        $this->assertTrue($rule->validate(1));
        $this->assertTrue($rule->validate(null));
        $this->assertFalse($rule->validate('Neither positive nor a null'));
    }
}
