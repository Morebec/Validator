<?php


namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

/**
 * Validates that a value is an Ip Address
 */
class IsIPAddress implements ValidationRuleInterface
{
    /**
     * @var string
     */
    private $message;

    /**
     * IsIpAddress constructor.
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
        return filter_var($v, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * @inheritDoc
     */
    public function getMessage($v): string
    {
        return $this->message ?: "The value '$v' was expected to be a string";
    }
}