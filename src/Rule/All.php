<?php


namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

/**
 * Make sure All rules are valid
 */
class All extends AbstractCompoundRule
{
    /**
     * @var string|null
     */
    private $message;

    public function __construct(array $rules, ?string $message = null)
    {
        $this->message = $message;
        parent::__construct($rules);
    }

    /**
     * @inheritDoc
     */
    public function validate($v): bool
    {
        /** @var ValidationRuleInterface $rule */
        foreach ($this->rules as $rule) {
            if(!$rule->validate($v)) {
                if(!$this->message) {
                    $this->message = $rule->getMessage($v);
                }
                return false;
            }
        }

        return true;
    }

    /**
     * @inheritDoc
     */
    public function getMessage($v): string
    {
        return $this->message;
    }
}