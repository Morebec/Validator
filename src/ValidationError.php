<?php


namespace Morebec\Validator;

/**
 * Represents a Validation Error
 */
class ValidationError
{
    /** @var mixed the value that was considered invalid */
    private $value;

    /** @var string the message */
    private $message;

    /**
     * ValidationError constructor.
     * @param string $message
     * @param mixed $value
     */
    public function __construct(string $message, $value)
    {
        $this->message = $message;
        $this->value = $value;
    }

    /**
     * Returns the message of this validation error
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Returns the value that was considered invalid
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}