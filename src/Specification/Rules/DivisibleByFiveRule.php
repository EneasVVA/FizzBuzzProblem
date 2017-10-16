<?php
/**
 * Created by PhpStorm.
 * User: eneas
 * Date: 16/10/2017
 * Time: 22:13
 */

namespace eneas\Specification\Rules;

use eneas\Specification\SpecificationInterface;
use eneas\VO\NumberVO;

class DivisibleByFiveRule extends AbstractRule
{
    const DIVISOR = 5;

    public function isSatisfiedBy(NumberVO $number)
    {
        return $number->isDivisibleBy(NumberVO::create(self::DIVISOR));
    }


    protected function setMessageWhenRuleIsSatisfied()
    {
        $this->satisfactionMessage = 'Buzz';
    }

    public function getPriority()
    {
        return 1;
    }
}
