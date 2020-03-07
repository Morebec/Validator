<?php

namespace Tests\Morebec\Validator\Rule;

use Morebec\Validator\Rule\IsInChoice;
use PHPUnit\Framework\TestCase;

class IsInChoiceTest extends TestCase
{
    public function testValidate()
    {
        $rule = new IsInChoice(['a', 'b', 'c']);
        $ruleSecond = new IsInChoice(['a', 'b', 'c'], 'Custom message');
        $this->assertTrue($rule->validate('a'));
        $this->assertFalse($rule->validate('d'));

        $this->assertEquals(
            "The value 'd' was expected to be one in [a, b, c]",
            $rule->getMessage('d')
        );
        $this->assertEquals(
            'Custom message',
            $ruleSecond->getMessage('d')
        );
    }
}
