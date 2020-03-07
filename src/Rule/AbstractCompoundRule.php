<?php

namespace Morebec\Validator\Rule;

use Morebec\Validator\ValidationRuleInterface;

abstract class AbstractCompoundRule implements ValidationRuleInterface
{
    /**
     * @var ValidationRuleInterface[]
     */
    protected $rules;

    /**
     * AbstractCompoundRule constructor.
     *
     * @param ValidationRuleInterface[] $rules
     */
    public function __construct(array $rules)
    {
        $this->rules = $rules;
    }

    /**
     * @return ValidationRuleInterface[]
     */
    public function getRules(): array
    {
        return $this->rules;
    }
}
