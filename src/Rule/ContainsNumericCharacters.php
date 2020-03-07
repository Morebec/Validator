<?php

namespace Morebec\Validator\Rule;


use InvalidArgumentException;
use Morebec\Validator\ValidationRuleInterface;

class ContainsNumericCharacters implements ValidationRuleInterface
{
    /**
     * @var int
     */
    private $numberCharacters;
    /**
     * @var bool
     */
    private $strict;
    /**
     * @var string|null
     */
    private $message;

    /**
     * ContainsNumericCharacters constructor.
     * @param int $numberCharacters
     * @param bool $strict
     * @param string|null $message
     */
    public function __construct(
        int $numberCharacters,
        bool $strict,
        ?string $message = null
    )
    {
        if($numberCharacters<0)
            throw new InvalidArgumentException();
        $this->numberCharacters = $numberCharacters;
        $this->strict = $strict;
        $this->message = $message;
    }

    /**
     * Validates a value according to this rule and returns if it is valid or not
     * @param mixed $v
     * @return bool true if valid, otherwise false
     */
    public function validate($v): bool
    {
        if($this->strict){
            return $this->countDigits($v)<=$this->numberCharacters;
        }
        return $this->countDigits($v)>=$this->numberCharacters;

    }

    /**
     * Returns the message to be used in case the validation did not pass
     * @param mixed $v the value that did not pass the validation
     * @return string
     */
    public function getMessage($v): string
    {
        if($this->message){
            return $this->message;
        }
        if($this->strict){
            return "Number of numeric characters exceeds ".${$this->numberCharacters};
        }
        return "Number of numeric characters should exceed ".${$this->numberCharacters};
    }

    /**
     * @param string $str
     * @return int
     */
    private function countDigits(string $str)
    {
        return preg_match_all( "/[0-9]/", $str )?:0;
    }
}