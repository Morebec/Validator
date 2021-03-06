<?php

namespace Morebec\Validator\Rule;

use Morebec\Validator\ValidationRuleInterface;

/**
 * Validates that a value is a boolean.
 */
class IsBoolean implements ValidationRuleInterface
{
    /**
     * @var string|null
     */
    private $message;

    public function __construct(?string $message = null)
    {
        $this->message = $message;
    }

    /**
     * {@inheritdoc}
     */
    public function validate($v): bool
    {
        return \is_bool($v);
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage($v): string
    {
        return $this->message ?: "The value '{$v}' was expected to be a boolean";
    }
}
