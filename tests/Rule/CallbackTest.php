<?php

namespace Rule;

use Morebec\Validator\Rule\Callback;
use PHPUnit\Framework\TestCase;

class CallbackTest extends TestCase
{
    public function testValidate()
    {
        $rule = new Callback(static function ($v) {
            return $v === 'return_true';
        }, 'Test validation errored');

        $this->assertTrue($rule->validate('return_true'));
        $this->assertFalse($rule->validate('return_false'));
    }
}
