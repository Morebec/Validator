<?php


namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

class MaxLength implements ValidationRuleInterface
{
    /**
     * @var int
     */
    private $length;

    public function __construct(int $length)
    {
        $this->length = $length;
    }

    /**
     * @inheritDoc
     */
    public function validate($v): bool
    {
        return strlen($v) <= $this->length;
    }

    /**
     * @inheritDoc
     */
    public function getMessage($v): string
    {
        return "The length of '{$v}' was expected to be at most {$this->length} characters long";
    }
}