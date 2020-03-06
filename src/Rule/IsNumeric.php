<?php

namespace Morebec\Validator\Rule;

use Morebec\Validator\ValidationRuleInterface;

class IsNumeric implements ValidationRuleInterface
{
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
        return "The value '{$v}' was expected be numeric";
    }
}
