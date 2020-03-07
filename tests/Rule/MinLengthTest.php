<?php

namespace Tests\Morebec\Validator\Rule;


use InvalidArgumentException;
use Morebec\Validator\Rule\MinLength;
use PHPUnit\Framework\TestCase;

class MinLengthTest extends TestCase
{
    public function testValidate(){
        $ruleFirst = new MinLength(4);
        $ruleSecond = new MinLength(4,"Custom message");

        $this->assertTrue($ruleFirst->validate("test string"));
        $this->assertFalse($ruleFirst->validate("tes"));
        $this->assertEquals("Custom message",$ruleSecond->getMessage("test"));
        $this->expectException(InvalidArgumentException::class);
        $ruleThird = new MinLength(-1);
    }
}