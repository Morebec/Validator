<?php

namespace Tests\Morebec\Validator\Rule;


use Morebec\Validator\Rule\Length;
use PHPUnit\Framework\TestCase;

class LengthTest extends TestCase
{
    public function testValidate(){
        $ruleFirst = new Length(4);
        $ruleSecond = new Length(4,"Custom message");

        $this->assertTrue($ruleFirst->validate("test"));
        $this->assertFalse($ruleFirst->validate("test message"));
        $this->assertEquals("Custom message",$ruleSecond->getMessage("test"));
    }
}