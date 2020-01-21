<?php


namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

class IsNumeric implements ValidationRuleInterface
{

    /**
     * @inheritDoc
     */
    public function validate($v): bool
    {
        return is_numeric($v);
    }

    /**
     * @inheritDoc
     */
    public function getMessage($v): string
    {
        return "THe value '{$v}' was expected be numeric";
    }
}