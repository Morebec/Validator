<?php

namespace Morebec\Validator\Rule;


use InvalidArgumentException;
use Morebec\Validator\ValidationRuleInterface;

class MinLength implements ValidationRuleInterface
{
    /**
     * @var int
     */
    private $minLength;

    /**
     * @var string|null
     */
    private $message;

    /**
     * MinLength constructor.
     * @param int $minLength
     * @param string|null $message
     */
    public function __construct(
        int $minLength,
        ?string $message = null
    )
    {
        if($minLength<0)
            throw new InvalidArgumentException();
        $this->minLength = $minLength;
        $this->message = $message;
    }

    /**
     * Validates a value according to this rule and returns if it is valid or not
     * @param mixed $v
     * @return bool true if valid, otherwise false
     */
    public function validate($v): bool
    {
        return strlen($v)>=$this->minLength;
    }

    /**
     * Returns the message to be used in case the validation did not pass
     * @param mixed $v the value that did not pass the validation
     * @return string
     */
    public function getMessage($v): string
    {
        return $this->message?:"'${$v}' is supposed to be at least ".$this->minLength." characters long.";
    }
}