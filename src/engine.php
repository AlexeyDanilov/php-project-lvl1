<?php

use function cli\line;
use function cli\prompt;

const ROUNDSCOUNT = 3;

function startEngine($description, array $questionsAnswers)
{
    line("Welcome to the Brain Games!\n");
    line("$description");
    $name = prompt('May I have your name?');
    line("Hello,%s", $name);
    for ($i = 0; $i < ROUNDSCOUNT; $i++) {
        line("Question: {$questionsAnswers[$i]['question']}");
        $answer = prompt('Your answer');
        if ($answer != $questionsAnswers[$i]['answer']) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$questionsAnswers[$i]['answer']}'.
               Let's try again, {$name}!");
            return;
        }
        line('Correct');
    }

    line("Congratulations, {$name}!");
}
