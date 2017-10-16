<?php
/**
 * Created by PhpStorm.
 * User: eneas
 * Date: 17/10/2017
 * Time: 0:12
 */

namespace eneas\tests;

use eneas\FizzBuzz;
use eneas\VO\NumberVO;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @var FizzBuzz */
    private $fizzBuzz;

    protected function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    /** @test */
    public function shouldResolveAnyNumber()
    {
        $expecteds = [3 => 'Fizz', 5 => 'Buzz', 15 => 'FizzBuzz', 99 => 'Fizz'];

        foreach ($expecteds as $number => $expectedValue) {
            $this->assertEquals($expectedValue, $this->fizzBuzz->resolve(NumberVO::create($number)));
        }
    }

    /** @test */
    public function shouldReturnFizzBuzzList()
    {
        $expecteds = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'mocks' . DIRECTORY_SEPARATOR . '100_fizzbuzz.txt');
        $expecteds = explode(PHP_EOL, $expecteds);

        $actuals = $this->fizzBuzz->multiResolve(1, 100);

        foreach ($expecteds as $key => $oneExpected) {
            $this->assertEquals($actuals[$key], $oneExpected);
        }
    }
}
