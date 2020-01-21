<?php


namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

class IsNotNull implements ValidationRuleInterface
{
    /**
     * @var string|null
     */
    private $message;

    public function __construct(?string $message = null)
    {
        $this->message = $message;
    }

    /**
     * @inheritDoc
     */
    public function validate($v): bool
    {
        return $v !== null;
    }

    /**
     * @inheritDoc
     */
    public function getMessage($v): string
    {
        return $this->message ?: 'the value was expected not to be null';
    }
}