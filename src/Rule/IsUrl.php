<?php

namespace Morebec\Validator\Rule;

use Morebec\Validator\ValidationRuleInterface;

class IsUrl implements ValidationRuleInterface
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
        return filter_var($v, FILTER_VALIDATE_URL);
    }

    /**
     * Returns the message to be used in case the validation did not pass.
     *
     * @param mixed $v the value that did not pass the validation
     */
    public function getMessage($v): string
    {
        return $this->message ?: "'{$v}' was expected to be an URL.";
    }
}
