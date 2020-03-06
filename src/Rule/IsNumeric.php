<?php

namespace Morebec\Validator\Rule;

use Morebec\Validator\ValidationRuleInterface;

class IsNumeric implements ValidationRuleInterface
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
        return is_numeric($v);
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage($v): string
    {
        return $this->message ?: "The value '{$v}' was expected be numeric";
    }
}
