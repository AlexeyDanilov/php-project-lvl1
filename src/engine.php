<?php

use function BrainGames\Cli\hello;
use function cli\line;
use function cli\prompt;



function engine($text, array $question, array $truthVal)
{
    $name = hello($text);
    $count = 0;
    $i = 0;
    while ($count < 3) {
        line("Question: {$question[$i]}");
        $answer = (int)prompt('Your answer');
        if ($answer === $truthVal[$i]) {
            line('Correct');
            $count++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$truthVal[$i]}'.
               Let's try again, {$name}!");
            break;
        }
        $i++;
    }
    if ($count === 3) {
        line("Congratulations, {$name}!");
    }
}