<?php

namespace Morebec\Validator\Rule;

use Morebec\Validator\ValidationRuleInterface;

class IsNull implements ValidationRuleInterface
{
    /**
     * {@inheritdoc}
     */
    public function validate($v): bool
    {
        return $v === null;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage($v): string
    {
        return "The value '{$v}' was expected to be null";
    }
}
