<?php
/**
 * Created by PhpStorm.
 * User: eneas
 * Date: 16/10/2017
 * Time: 22:06
 */

namespace eneas\VO;

final class NumberVO
{
    /** @var integer */
    private $value;

    private function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function create(int $value)
    {
        return new NumberVO($value);
    }

    public function value()
    {
        return $this->value;
    }

    public function __toString()
    {
        return strval($this->value);
    }

    /**
     * @param NumberVO $other
     *
     * @return bool
     */
    public function isDivisibleBy(NumberVO $other)
    {
        return ($this->value() % $other->value()) == 0;
    }
}
