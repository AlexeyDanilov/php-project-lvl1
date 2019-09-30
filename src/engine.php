<?php

use function cli\line;
use function cli\prompt;



function engine($description, array $questionsAnswers)
{
    line("Welcome to the Brain Games!\n");
    line("$description");
    $name = prompt('May I have your name?');
    line("Hello,%s", $name);
    $roundsGame = 3;
    $count = 0;
    $i = 0;
    while ($count < $roundsGame) {
        line("Question: {$questionsAnswers[$i]['question']}");
        $answer = prompt('Your answer');
        if ($answer == $questionsAnswers[$i]['answer']) {
            line('Correct');
            $count++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$questionsAnswers[$i]['answer']}'.
               Let's try again, {$name}!");
            break;
        }
        $i++;
    }
    if ($count === $roundsGame) {
        line("Congratulations, {$name}!");
    }
}
