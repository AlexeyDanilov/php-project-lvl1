<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\hello;

function calculation($val1, $val2)
{
    $min = min($val1, $val2);
    for ($i = $min; $i >= 1; $i--) {
        if ($val1 % $i === 0 && $val2 % $i === 0) {
            return $i;
        }
    }
}

function gcd()
{
    $name = hello("Find the greatest common divisor of given numbers.");
    $count = 0;
    while ($count < 3) {
        $val1 = rand(1, 100);
        $val2 = rand(1, 100);
        line("Question: {$val1} {$val2}");
        $answer = (int) prompt('Your answer');
        $res = calculation($val1, $val2);
        if ($answer === $res) {
            line('Correct');
            $count++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$res}'.
                Let's try again, {$name}!");
            return;
        }
    }

    if ($count === 3) {
        line("Congratulations, {$name}!");
    }
}
