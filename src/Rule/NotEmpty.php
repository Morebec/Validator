<?php

namespace Morebec\Validator\Rule;

use Morebec\Validator\ValidationRuleInterface;

class NotEmpty implements ValidationRuleInterface
{
    /**
     * @var string|null
     */
    private $message;

    public function __construct(
        ?string $message = null
    ) {
        $this->message = $message;
    }

    /**
     * Validates a value according to this rule and returns if it is valid or not.
     *
     * @param mixed $v
     *
     * @return bool true if valid, otherwise false
     */
    public function validate($v): bool
    {
        return !empty($v);
    }

    /**
     * Returns the message to be used in case the validation did not pass.
     *
     * @param mixed $v the value that did not pass the validation
     */
    public function getMessage($v): string
    {
        return $this->message ?: "The value of '{$v}' was not expected to be empty";
    }
}
