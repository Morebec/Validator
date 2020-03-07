<?php

namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

class MatchesRegex implements ValidationRuleInterface
{
    /**
     * @var string
     */
    private $regex;
    /**
     * @var string|null
     */
    private $message;

    /**
     * MatchesRegex constructor.
     * @param string $regex
     * @param string|null $message
     */
    public function __construct(
        string $regex,
        ?string $message = null
    )
    {
        $this->regex = $regex;
        $this->message = $message;
    }

    /**
     * Validates a value according to this rule and returns if it is valid or not
     * @param mixed $v
     * @return bool true if valid, otherwise false
     */
    public function validate($v): bool
    {
        return preg_match($this->regex, $v) != 0?true:false;
    }

    /**
     * Returns the message to be used in case the validation did not pass
     * @param mixed $v the value that did not pass the validation
     * @return string
     */
    public function getMessage($v): string
    {
        return $this->message?:"'${$v}' does not match provided regex";
    }
}