<?php


namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

class IsPositive implements ValidationRuleInterface
{
    /**
     * @var string|null
     */
    private $message;

    /**
     * Positive constructor.
     * @param string|null $message
     */
    public function __construct(string $message = null)
    {
        $this->message = $message;
    }

    /**
     * @inheritDoc
     */
    public function validate($v): bool
    {
        return $v > 0;
    }

    /**
     * @inheritDoc
     */
    public function getMessage($v): string
    {
        return $this->message ?: "Expected value $v to be positive";
    }
}