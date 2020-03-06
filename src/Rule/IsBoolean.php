<?php

namespace Morebec\Validator\Rule;

use Morebec\Validator\ValidationRuleInterface;

/**
 * Validates that a value is a boolean.
 */
class IsBoolean implements ValidationRuleInterface
{
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
        return "The value '{$v}' was expected to be a boolean";
    }
}
