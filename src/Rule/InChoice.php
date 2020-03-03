<?php

namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

class InChoice implements ValidationRuleInterface
{
    private $choice;

    public function __construct(
        array $choice
    )
    {
        $this->choice = $choice;
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
        return "Variable '{$v}' was expected to be inside choice array";
    }
}