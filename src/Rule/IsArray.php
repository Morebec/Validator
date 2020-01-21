<?php


namespace Morebec\Validator\Rule;

use Morebec\Validator\ValidationRuleInterface;

/**
 * Validates that a value is an array
 */
class IsArray implements ValidationRuleInterface
{
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
        return "The value '{$v}' was expected to be an array";
    }
}