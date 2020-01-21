<?php

namespace Morebec\Validator;

use Morebec\Validator\Rule\AbstractCompoundRule;

interface ValidatableInterface
{
    /**
     * @return  AbstractCompoundRule
     */
    public static function getValidationRule(): AbstractCompoundRule;
}