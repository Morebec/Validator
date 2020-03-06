<?php


namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

/**
 * Validates that a value is an array
 */
class IsArray implements ValidationRuleInterface
{
    /**
     * @var string|null
     */
    private $message;

    /**
     * IsArray constructor.
     * @param string|null $message
     */
    public function __construct(?string $message = null)
    {
        $this->message = $message;
    }
    /**
     * @inheritDoc
     */
    public function validate($v): bool
    {
        return is_array($v);
    }

    /**
     * @inheritDoc
     */
    public function getMessage($v): string
    {
        return $this->message ?: "The value '{$v}' was expected to be an array";
    }
}