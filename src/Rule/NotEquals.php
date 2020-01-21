<?php


namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

/**
 * Performs a strict comparison
 */
class NotEquals implements ValidationRuleInterface
{
    /**
     * @var string
     */
    private $value;
    /**
     * @var string|null
     */
    private $message;

    /**
     * NotEquals constructor.
     * @param mixed $value
     * @param string|null $message
     */
    public function __construct($value, ?string $message = null)
    {
        $this->value = $value;
        $this->message = $message;
    }

    /**
     * @inheritDoc
     */
    public function validate($v): bool
    {
        return $this->value !== $v;
    }

    /**
     * @inheritDoc
     */
    public function getMessage($v): string
    {
        return $this->message ?: "Expected value {$v} to be equal to {$this->value}";
    }
}