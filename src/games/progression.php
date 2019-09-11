<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\hello;

function details()
{
    $step = rand(1, 10);
    $firstVal = rand(1, 100);
    $count = 10;
    $arr = [];
    for ($i = 0, $j = $firstVal; $i < $count; $i++, $j += $step) {
        $arr[$i] = $j;
    }
    return $arr;
}

function progression()
{
    $name = hello("What number is missing in the progression?");
    $count = 0;
    while ($count < 3) {
        $arr = details();
        $arr2 = $arr;
        $question = rand(1, 10);
        $arr2[$question] = '..';
        $str = implode(' ', $arr2);

        line("Question: {$str}");
        $answer = (int) prompt('Your answer');
        if ($answer === $arr[$question]) {
            line('Correct');
            $count++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$arr[$question]}'.
                Let's try again, {$name}!");
            break;
        }
    }
    if ($count === 3) {
        line("Congratulations, {$name}!");
    }
}
