<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\hello;

function value_info($val)
{
    if ($val < 2) {
        return 'no';
    }

    for ($i = 2; $i < $val / 2; $i++) {
        if ($val % $i === 0) {
            return 'no';
        }
    }
    return 'yes';
}

function prime()
{
    $name = hello("Answer \"yes\" if given number is prime. Otherwise answer \"no\".");
    $count = 0;
    while ($count < 3) {
        $val = rand(1, 50);
        $res = value_info($val);
        line("Question: {$val}");
        $answer = prompt('Your answer');
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
