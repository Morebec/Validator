<?php


namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

class IsNull implements ValidationRuleInterface
{

    /**
     * @inheritDoc
     */
    public function validate($v): bool
    {
        return $v === null;
    }

    /**
     * @inheritDoc
     */
    public function getMessage($v): string
    {
        return "The value '{$v}' was expected to be null";
    }
}