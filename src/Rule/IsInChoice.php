<?php

namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

class IsInChoice implements ValidationRuleInterface
{
    /**
     * @var array<mixed>
     */
    private $choice;

    /**
     * @var string|null
     */
    private $message;

    public function __construct(
        array $choice,
        ?string $message = null
    )
    {
        $this->choice = $choice;
        $this->message = $message;
    }

    /**
     * Validates a value according to this rule and returns if it is valid or not
     * @param mixed $v
     * @return bool true if valid, otherwise false
     */
    public function validate($v): bool
    {
        return in_array($v,$this->choice);
    }

    /**
     * Returns the message to be used in case the validation did not pass
     * @param mixed $v the value that did not pass the validation
     * @return string
     */
    public function getMessage($v): string
    {
        return $this->message?:"Value '{$v}' was expected to be one in ["  . implode(' , ', $this->choice)  . "]";
    }
}