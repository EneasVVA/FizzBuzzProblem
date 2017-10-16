<?php
/**
 * Created by PhpStorm.
 * User: eneas
 * Date: 16/10/2017
 * Time: 23:01
 */

namespace eneas\Specification\Rules;

use eneas\VO\NumberVO;

class DivisibleByThreeAndFiveRule extends AbstractRule
{
    /** @var DivisibleByThreeRule  */
    private $divisibleByThree;

    /** @var DivisibleByFiveRule */
    private $divisibleByFive;

    public function __construct()
    {
        $this->divisibleByThree = new DivisibleByThreeRule();
        $this->divisibleByFive = new DivisibleByFiveRule();

        parent::__construct();
    }

    public function isSatisfiedBy(NumberVO $number)
    {
        return $this->divisibleByThree->isSatisfiedBy($number) && $this->divisibleByFive->isSatisfiedBy($number);
    }

    protected function setMessageWhenRuleIsSatisfied()
    {
        $this->satisfactionMessage = $this->divisibleByThree->getSatisfactionMessage() . $this->divisibleByFive->getSatisfactionMessage();
    }

    public function getPriority()
    {
        return 2;
    }
}
