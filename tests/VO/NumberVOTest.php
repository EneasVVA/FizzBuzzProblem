<?php
/**
 * Created by PhpStorm.
 * User: eneas
 * Date: 17/10/2017
 * Time: 0:12
 */

namespace eneas\tests\VO;

use eneas\VO\NumberVO;
use PHPUnit\Framework\TestCase;

class NumberVOTest extends TestCase
{

    /**
     * @test
     */
    public function shouldReturnRepresentatIntegerValue()
    {
        $five = NumberVO::create(5);
        $this->assertEquals($five->value(), 5);

        $this->assertInternalType('int', $five->value());
    }

    /** @test */
    public function shouldCheckDivisibility()
    {
        $expecteds = [
            15 => [ 15, 30, 45],
            3 => [3, 6, 9, 99],
            5 => [5, 25]
        ];

        foreach ($expecteds as $divisor => $dividends) {
            foreach ($dividends as $dividend) {
                $this->assertTrue(NumberVO::create($dividend)->isDivisibleBy(NumberVO::create($divisor)));
            }
        }
    }
}
