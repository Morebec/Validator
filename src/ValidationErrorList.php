<?php

namespace Morebec\Validator;

/**
 * Represents a list of validation errors.
 */
class ValidationErrorList
{
    /** @var ValidationError[] */
    private $errors;

    /**
     * ValidationErrorList constructor.
     */
    public function __construct()
    {
        $this->errors = [];
    }

    /**
     * Adds an error to this list.
     *
     * @param mixed $value
     */
    public function addError(string $message, $value): void
    {
        $this->errors[] = new ValidationError($message, $value);
    }

    /**
     * Indicates if it contains errors.
     */
    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }

    /**
     * Returns the list of errors.
     *
     * @return ValidationError[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Merges another array of errors to this list.
     */
    public function merge(self $errors): void
    {
        $this->errors = array_merge($this->errors, $errors->getErrors());
    }
}
