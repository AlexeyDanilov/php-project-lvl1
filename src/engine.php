<?php

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function startEngine($description, array $questionsAnswers)
{
    line("Welcome to the Brain Games!\n");
    line("$description");
    $name = prompt('May I have your name?');
    line("Hello,%s", $name);
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = $questionsAnswers[$i]['question'];
        $truthAnswer = $questionsAnswers[$i]['answer'];
        line("Question: {$question}");
        $userAnswer = prompt('Your answer');
        if ($userAnswer != $truthAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$truthAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
        line('Correct');
    }

    line("Congratulations, {$name}!");
}
