<?php

namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

class isUrl implements ValidationRuleInterface
{

    /**
     * Validates a value according to this rule and returns if it is valid or not
     * @param mixed $v
     * @return bool true if valid, otherwise false
     */
    public function validate($v): bool
    {
        return filter_var($v, FILTER_VALIDATE_URL);
    }

    /**
     * Returns the message to be used in case the validation did not pass
     * @param mixed $v the value that did not pass the validation
     * @return string
     */
    public function getMessage($v): string
    {
        return "'{$v}' was expected to be URL";
    }
}