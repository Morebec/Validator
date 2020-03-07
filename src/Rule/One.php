<?php

namespace Morebec\Validator\Rule;

use Morebec\Validator\ValidationRuleInterface;

/**
 * Helper compound rule to specify only a single rule.
 */
class One extends AbstractCompoundRule
{
    /**
     * @var string|null
     */
    private $message;

    public function __construct(ValidationRuleInterface $rule, ?string $message = null)
    {
        $this->message = $message;
        parent::__construct([$rule]);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($v): bool
    {
        return $this->getRule()->validate($v);
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage($v): string
    {
        return $this->message ?: $this->getRule()->getMessage($v);
    }

    private function getRule(): ValidationRuleInterface
    {
        return $this->rules[0];
    }
}
