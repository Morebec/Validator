<?php
/**
 * Created by PhpStorm.
 * User: M1QN
 * Date: 03-Mar-20
 * Time: 18:35
 */

namespace Tests\Morebec\Validator\Rule;

use Morebec\Validator\Rule\NotEmpty;
use PHPUnit\Framework\TestCase;

class NotEmptyTest extends TestCase
{
    public function testValidate()
    {
        $rule = new NotEmpty();
        $this->assertTrue($rule->validate([1,2]));
        $this->assertFalse($rule->validate([]));
    }
}