<?php

$answers = ['10' => 'Fizz', '01' => 'Buzz', '11' => 'FizzBuzz'];

for($i = 1; $i <= 100; $i++)
{
    $value = intval(($i % 3) == 0) . intval(($i % 5) == 0);

    $result = $answers[$value] ?? $i;

    print $result . PHP_EOL;

}
