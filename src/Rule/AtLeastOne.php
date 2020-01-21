<?php


namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

/**
 * Make sure at least one rule is valid
 */
class AtLeastOne extends AbstractCompoundRule
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
            if($rule->validate($v)) {
                return true;
            }

            if(!$this->message) {
                $this->message = $rule->getMessage($v);
            }
        }

        return false;
    }

    /**
     * @inheritDoc
     */
    public function getMessage($v): string
    {
        return $this->message;
    }
}