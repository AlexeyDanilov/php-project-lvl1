<?php

use function cli\line;
use function cli\prompt;



function engine($description, array $question, array $truthVal)
{
    line("Welcome to the Brain Games!\n");
    line("$description");
    $name = prompt('May I have your name?');
    line("Hello,%s", $name);
    $roundsGame = 3;
    $count = 0;
    $i = 0;
    while ($count < $roundsGame) {
        line("Question: {$question[$i]}");
        $answer = prompt('Your answer');
        if ($answer == $truthVal[$i]) {
            line('Correct');
            $count++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$truthVal[$i]}'.
               Let's try again, {$name}!");
            break;
        }
        $i++;
    }
    if ($count === $roundsGame) {
        line("Congratulations, {$name}!");
    }
}
