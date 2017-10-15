<?php

const NOT_DIVISIBLE_BY_ANY = '00';
const DIVISIBLE_BY_THREE = '10';
const DIVSIBLE_BY_FIVE = '01';
const DIVISIBLE_BY_BOTH = '11';

// we use true table for set the answers
$answers = [DIVISIBLE_BY_THREE => 'Fizz', DIVSIBLE_BY_FIVE => 'Buzz', DIVISIBLE_BY_BOTH => 'FizzBuzz'];

for ($i = 1; $i <= 100; $i++) {
    // we create a key for find out the definition
    $value = intval(($i % 3) == 0) . intval(($i % 5) == 0);

    $result = $value == NOT_DIVISIBLE_BY_ANY ? $i : $answers[$value];
    print $result . PHP_EOL;
}
