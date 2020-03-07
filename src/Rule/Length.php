<?php

namespace Morebec\Validator\Rule;


use InvalidArgumentException;
use Morebec\Validator\ValidationRuleInterface;

class Length implements ValidationRuleInterface
{
    /**
     * @var int
     */
    private $length;
    /**
     * @var string|null
     */
    private $message;

    /**
     * Length constructor.
     * @param int $length
     * @param string|null $message
     */
    public function __construct(
        int $length,
        ?string $message = null
    )
    {
        if ($length<0)
            throw new InvalidArgumentException();
        $this->length = $length;
        $this->message = $message;
    }

    /**
     * Validates a value according to this rule and returns if it is valid or not
     * @param mixed $v
     * @return bool true if valid, otherwise false
     */
    public function validate($v): bool
    {
        return strlen($v) === $this->length;
    }

    /**
     * Returns the message to be used in case the validation did not pass
     * @param mixed $v the value that did not pass the validation
     * @return string
     */
    public function getMessage($v): string
    {
        return $this->message?:"'${$v}' is expected to be exactly ".$this->length." characters long";
    }
}