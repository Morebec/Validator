<?php
/**
 * Created by PhpStorm.
 * User: M1QN
 * Date: 06-Mar-20
 * Time: 17:52
 */

namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

class ContainsUppercaseCharacters implements ValidationRuleInterface
{
    private $numberCharacters;
    private $strict;
    private $message;

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

    private function countUpperCase(string $message){
        $lowerCase = strtolower($message);
        $similar = similar_text($message, $lowerCase);
        return strlen($message)-$similar;
    }
}