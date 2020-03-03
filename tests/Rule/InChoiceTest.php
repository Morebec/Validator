<?php
/**
 * Created by PhpStorm.
 * User: M1QN
 * Date: 03-Mar-20
 * Time: 20:42
 */

namespace Tests\Morebec\Validator\Rule;


use Morebec\Validator\Rule\InChoice;
use PHPUnit\Framework\TestCase;

class InChoiceTest extends TestCase
{
    public function testValidate()
    {
        $rule = new InChoice(['a','b','c']);
        $this->assertTrue($rule->validate('a'));
        $this->assertFalse($rule->validate('d'));
    }
}