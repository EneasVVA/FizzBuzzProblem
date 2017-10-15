<?php

$answers = ['100' => 'Fizz', '010' => 'Buzz', '111' => 'FizzBuzz'];

for($i = 1; $i <= 100; $i++)
{
    $value = intval(($i % 3) == 0) . intval(($i % 5) == 0) . intval(($i % 15) == 0);

    $result = $answers[$value] ?? $i;

    print $result . PHP_EOL;

}
