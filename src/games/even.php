<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\hello;

function even()
{
    $name = hello("Answer \"yes\" if the number is even, otherwise answer \"no\".");

    $count = 0;
    while ($count < 3) {
        $num = rand(1, 100);
        $answer = prompt("Question: {$num}");
        if ($num % 2 === 0 && $answer === 'yes') {
            line("Correct!");
            $count++;
        } elseif ($num % 2 !== 0 && $answer === 'no') {
            line("Correct!");
            $count++;
        } elseif ($num % 2 === 0 && $answer === 'no') {
            line("'no' is wrong answer ;(. Correct answer was 'yes'.
                Let's try again, {$name}!");
            return;
        } elseif ($num % 2 !== 0 && $answer === 'yes') {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.
                Let's try again, {$name}!");
            return;
        } elseif ($answer !== 'yes' || $answer !== 'no') {
            line("'{$answer}' is wrong answer ;(.
                Let's ty again, {$name}!");
            return;
        }
    }
    if ($count === 3) {
        line("Congratulations, {$name}!");
    }
}
