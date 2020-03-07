<?php

namespace Tests\Morebec\Validator\Rule;

use Morebec\Validator\Rule\MaxLength;
use PHPUnit\Framework\TestCase;

class MaxLengthTest extends TestCase
{
    public function testValidate()
    {
        $firstRule = new MaxLength(5);
        $secondRule = new MaxLength(5,"Custom message");
        $this->assertTrue($firstRule->validate("test"));
        $this->assertFalse($firstRule->validate("long test"));
        $this->assertEquals(
            "The length of 'arr' was expected to be at most 5 characters long",
            $firstRule->getMessage("arr")
        );
        $this->assertEquals(
            "Custom message",
            $secondRule->getMessage("arr")
        );
    }
}