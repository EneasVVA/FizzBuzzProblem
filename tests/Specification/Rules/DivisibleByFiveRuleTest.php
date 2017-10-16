<?php
/**
 * Created by PhpStorm.
 * User: eneas
 * Date: 17/10/2017
 * Time: 0:52
 */

namespace eneas\tests\Specification\Rules;

use eneas\Specification\Rules\DivisibleByFiveRule;
use eneas\VO\NumberVO;
use PHPUnit\Framework\TestCase;

class DivisibleByFiveRuleTest extends TestCase
{
    /** @var  DivisibleByFiveRule */
    private $divisibleByFiveRule;

    public function setUp()
    {
        $this->divisibleByFiveRule = new DivisibleByFiveRule();
    }

    /** @test */
    public function shouldAssertTrueBecauseFifteenIsDivisor()
    {
        $this->assertTrue($this->divisibleByFiveRule->isSatisfiedBy(NumberVO::create(15)));
    }

    /** @test */
    public function shouldAssertFalseBecauseFifteenIsDivisor()
    {
        $this->assertFalse($this->divisibleByFiveRule->isSatisfiedBy(NumberVO::create(17)));
    }
}
