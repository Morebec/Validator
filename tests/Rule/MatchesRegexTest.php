<?php

namespace Tests\Morebec\Validator\Rule;
use Morebec\Validator\Rule\MatchesRegex;
use PHPUnit\Framework\TestCase;


class MatchesRegexTest extends TestCase
{
    public function testValidate(){
        $ruleFirst = new MatchesRegex("/[0-9]/");
        $ruleSecond = new MatchesRegex("/[0-9]/","Custom message");

        $this->assertTrue($ruleFirst->validate("hello1"));
        $this->assertFalse($ruleFirst->validate("hello"));
        $this->assertEquals("Custom message",$ruleSecond->getMessage("hello"));
    }
}