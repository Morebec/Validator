<?php

namespace Tests\Morebec\Validator\Rule;
use Morebec\Validator\Rule\ContainsNumericCharacters;
use PHPUnit\Framework\TestCase;

class ContainsNumericCharactersTest extends TestCase
{
    public function testValidate(){
        $ruleFirst = new ContainsNumericCharacters(1,true);
        $ruleSecond = new ContainsNumericCharacters(1,false);
        $ruleThird= new ContainsNumericCharacters(1,false,"Custom Message");
        $this->assertTrue($ruleFirst->validate("test string 1"));
        $this->assertFalse($ruleFirst->validate("test string 12"));
        $this->assertFalse($ruleSecond->validate('test string'));
        $this->assertTrue($ruleSecond->validate('test string 12'));
        $this->assertEquals( "Custom Message", $ruleThird->getMessage("test string"));
    }
}