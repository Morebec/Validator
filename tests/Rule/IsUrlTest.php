<?php

namespace Tests\Morebec\Validator\Rule;


use Morebec\Validator\Rule\IsUrl;
use PHPUnit\Framework\TestCase;

class IsUrlTest extends TestCase
{
    public function testValidate()
    {
        $rule = new IsUrl();
        $ruleSecond = new IsUrl("Custom message");

        $this->assertTrue($rule->validate("https://www.google.com"));
        $this->assertFalse($rule->validate("a"));

        $this->assertEquals(
            "'d' was expected to be an URL.",
            $rule->getMessage("d")
        );

        $this->assertEquals(
            "Custom message",
            $ruleSecond->getMessage("https://www.google.com")
        );

        $this->assertTrue($rule->validate("ftp://ftp.is.co.za.example.org/rfc/rfc1808.txt"));
        $this->assertTrue($rule->validate("gopher://spinaltap.micro.umn.example.edu/00/Weather/California/Los%20Angeles"));
        $this->assertTrue($rule->validate("http://www.math.uio.no.example.net/faq/compression-faq/part1.html"));
        $this->assertTrue($rule->validate("mailto:mduerst@ifi.unizh.example.gov"));
        $this->assertTrue($rule->validate("news:comp.infosystems.www.servers.unix"));
        $this->assertTrue($rule->validate("telnet://melvyl.ucop.example.edu/"));
        $this->assertTrue($rule->validate("http://www.ietf.org/rfc/rfc2396.txt"));
        $this->assertTrue($rule->validate("ldap://[2001:db8::7]/c=GB?objectClass?one"));
        $this->assertTrue($rule->validate("mailto:John.Doe@example.com"));
        $this->assertTrue($rule->validate("news:comp.infosystems.www.servers.unix"));
    }
}