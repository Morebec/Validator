<?php

namespace Morebec\Validator;

interface ValidationRuleInterface
{
    /**
     * Validates a value according to this rule and returns if it is valid or not.
     *
     * @param mixed $v
     *
     * @return bool true if valid, otherwise false
     */
    public function validate($v): bool;

    /**
     * Returns the message to be used in case the validation did not pass.
     *
     * @param mixed $v the value that did not pass the validation
     */
    public function getMessage($v): string;
}
