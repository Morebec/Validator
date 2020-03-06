<?php
/**
 * Created by PhpStorm.
 * User: M1QN
 * Date: 06-Mar-20
 * Time: 18:08
 */

namespace Tests\Morebec\Validator\Rule;

use Morebec\Validator\Rule\ContainsUppercaseCharacters;
use PHPUnit\Framework\TestCase;

class ContainsUppercaseCharactersTest extends TestCase
{
    public function testValidate(){
        $ruleFirst = new ContainsUppercaseCharacters(1,true);
        $ruleSecond = new ContainsUppercaseCharacters(1,false);
        $ruleThird= new ContainsUppercaseCharacters(1,false,"Custom Message");
        $this->assertTrue($ruleFirst->validate("Test string"));
        $this->assertFalse($ruleFirst->validate("Test String"));
        $this->assertFalse($ruleSecond->validate('test string'));
        $this->assertTrue($ruleSecond->validate('Test String'));
        $this->assertEquals( "Custom Message", $ruleThird->getMessage("test string"));
    }
}