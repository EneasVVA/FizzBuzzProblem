<?php
/**
 * Created by PhpStorm.
 * User: eneas
 * Date: 16/10/2017
 * Time: 22:41
 */

namespace eneas;

use eneas\Specification\PriorityRulesQueue;
use eneas\Specification\Rules\DivisibleByFiveRule;
use eneas\Specification\Rules\DivisibleByThreeAndFiveRule;
use eneas\Specification\Rules\DivisibleByThreeRule;
use eneas\VO\NumberVO;

class FizzBuzz
{
    /** @var PriorityRulesQueue */
    private $rules;

    public function __construct()
    {
        $this->rules = new PriorityRulesQueue(
            new DivisibleByThreeRule(),
            new DivisibleByFiveRule(),
            new DivisibleByThreeAndFiveRule()
        );
    }

    public function resolve(NumberVO $number)
    {
        foreach (clone $this->rules as $rule) {
            if ($rule->isSatisfiedBy($number)) {
                return $rule->getSatisfactionMessage();
            }
        }

        return $number->value();
    }

    public function multiResolve($from = 1, $to = 100)
    {
        $result = [];

        for ($i = $from; $i <= $to; $i++) {
            $result[] = $this->resolve(NumberVO::create($i));
        }

        return $result;
    }
}
