<?php

namespace Morebec\Validator\Rule;

use Morebec\Validator\ValidationRuleInterface;

/**
 * Validation to execute a custom callback.
 */
class Callback implements ValidationRuleInterface
{
    /**
     * @var \Closure
     */
    private $closure;

    /**
     * @var string
     */
    private $message;

    /**
     * Callback constructor.
     */
    public function __construct(\Closure $closure, string $message)
    {
        $this->closure = $closure;
        $this->message = $message;
    }

    /**
     * {@inheritdoc}
     */
    public function validate($v): bool
    {
        $closure = $this->closure;

        return $closure($v);
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage($v): string
    {
        return  $this->message;
    }
}
