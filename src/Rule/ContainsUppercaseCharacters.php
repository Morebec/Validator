<?php

namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

class ContainsUppercaseCharacters implements ValidationRuleInterface
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
     * ContainsUppercaseCharacters constructor.
     * @param int|null $numberCharacters
     * @param bool|null $strict
     * @param string|null $message
     */
    public function __construct(
        ?int $numberCharacters = 1,
        ?bool $strict = false,
        ?string $message = null
    )
    {
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
            return $this->countUpperCase($v)<=$this->numberCharacters;
        }
        else{
            return $this->countUpperCase($v)>=$this->numberCharacters;
        }
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
        else if($this->strict){
            return "Number of uppercase characters exceeds ".${$this->numberCharacters};
        }
        else{
            return "Number of uppercase characters should exceed ".${$this->numberCharacters};
        }
    }

    /**
     * @param string $message
     * @return int
     */
    private function countUpperCase(string $message): int
    {
        $lowerCase = strtolower($message);
        $similar = similar_text($message, $lowerCase);
        return strlen($message)-$similar;
    }
}