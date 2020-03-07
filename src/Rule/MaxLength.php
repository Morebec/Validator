<?php

namespace Morebec\Validator\Rule;

use InvalidArgumentException;
use Morebec\Validator\ValidationRuleInterface;

class MaxLength implements ValidationRuleInterface
{
    /**
     * @var int
     */
    private $length;

    /**
     * @var string|null
     */
    private $message;

    public function __construct(
        int $length,
        ?string $message = null
    )
    {
        if($length<0)
            throw new InvalidArgumentException();
        $this->length = $length;
        $this->message = $message;
    }

    /**
     * {@inheritdoc}
     */
    public function validate($v): bool
    {
        return \strlen($v) <= $this->length;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage($v): string
    {
        return $this->message?:"The length of '{$v}' was expected to be at most {$this->length} characters long";
    }
}
