<?php

namespace Morebec\Validator\Rule;

use Morebec\Validator\ValidationRuleInterface;

/**
 * Performs a strict comparison.
 */
class NotEquals implements ValidationRuleInterface
{
    /**
     * @var mixed
     */
    private $value;

    /**
     * @var string|null
     */
    private $message;

    public function __construct($value, ?string $message = null)
    {
        $this->value = $value;
        $this->message = $message;
    }

    /**
     * {@inheritdoc}
     */
    public function validate($v): bool
    {
        return $this->value !== $v;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage($v): string
    {
        return $this->message ?: "The value {$v} was not expected to be equal to {$this->value}";
    }
}
