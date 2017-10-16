<?php
/**
 * Created by PhpStorm.
 * User: eneas
 * Date: 16/10/2017
 * Time: 22:28
 */

namespace eneas\Specification\Rules;

use eneas\Specification\SpecificationInterface;

abstract class AbstractRule implements SpecificationInterface
{
    const MIN_PRIORITY = 1;

    protected $satisfactionMessage;

    protected $priority;

    public function __construct()
    {
        $this->setMessageWhenRuleIsSatisfied();
    }

    abstract protected function setMessageWhenRuleIsSatisfied();

    public function getPriority()
    {
        return self::MIN_PRIORITY;
    }

    public function getSatisfactionMessage()
    {
        return $this->satisfactionMessage;
    }
}
