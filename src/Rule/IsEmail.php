<?php

namespace Morebec\Validator\Rule;

use Morebec\Validator\ValidationRuleInterface;

/**
 * Validates that a value is an Email Address.
 */
class IsEmail implements ValidationRuleInterface
{
    /**
     * @var string|null
     */
    private $message;

    /**
     * IsEmail constructor.
     */
    public function __construct(?string $message = null)
    {
        $this->message = $message;
    }

    /**
     * {@inheritdoc}
     */
    public function validate($v): bool
    {
        return filter_var($v, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage($v): string
    {
        return $this->message ?: "The value '{$v}' was expected to be a valid email address";
    }
}
