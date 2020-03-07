<?php

namespace Morebec\Validator;

use Morebec\Validator\Rule\AbstractCompoundRule;

/**
 * The validate is a simple validation utility that allows to aggregate errors.
 */
class Validator
{
    /**
     * @param mixed $v
     */
    public static function validate($v, AbstractCompoundRule $rule): ValidationErrorList
    {
        $errors = new ValidationErrorList();
        $rules = $rule->getRules();
        foreach ($rules as $r) {
            if (!$r->validate($v)) {
                $errors->addError($r->getMessage($v), $v);
            }
        }

        return $errors;
    }
}
