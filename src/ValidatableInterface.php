<?php

namespace Morebec\Validator;

use Morebec\Validator\Rule\AbstractCompoundRule;

interface ValidatableInterface
{
    public static function getValidationRule(): AbstractCompoundRule;
}
