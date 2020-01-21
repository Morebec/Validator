<?php

namespace Morebec\Validator\Rule;

use Morebec\Validator\ValidationRuleInterface;

class IsPositiveOrZero implements ValidationRuleInterface
{
    /**
     * @var string
     */
    private $message;

    public function __construct(string $message = null)
    {
        $this->message = $message;
    }

    /**
     * @inheritDoc
     */
    public function validate($v): bool
    {
        return $v >= 0;
    }

    /**
     * @inheritDoc
     */
    public function getMessage($v): string
    {
        return $this->message ?: "The value {$v} was expected to be positive or zero";
    }
}