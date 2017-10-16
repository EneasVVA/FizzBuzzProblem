<?php
/**
 * Created by PhpStorm.
 * User: eneas
 * Date: 16/10/2017
 * Time: 21:58
 */

namespace eneas\Specification;

use eneas\VO\NumberVO;

interface SpecificationInterface
{
    public function isSatisfiedBy(NumberVO $number);
}
