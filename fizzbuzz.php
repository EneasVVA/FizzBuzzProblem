<?php
/**
 * Created by PhpStorm.
 * User: eneas
 * Date: 16/10/2017
 * Time: 22:37
 */

require_once __DIR__.'/vendor/autoload.php';

$fizzBuzz = new \eneas\FizzBuzz();

$result = $fizzBuzz->multiResolve(1, 100);
print implode(PHP_EOL, $result);