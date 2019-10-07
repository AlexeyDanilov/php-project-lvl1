<?php

namespace BrainGames\Prime;

const DESCRIPTION = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

function isPrime($value)
{
    if ($value < 2) {
        return false;
    } elseif ($value === 2) {
        return true;
    }

    for ($i = 2; $i <= $value / 2; $i++) {
        if ($value % $i === 0) {
            return false;
        }
    }
    return true;
}

function checkNumberForSimplicity()
{
    $questionsAnswers = [];
    for ($i = 0; $i < ROUNDSCOUNT; $i++) {
        $question = rand(1, 50);
        $answer = isPrime($question) ? 'yes' : 'no';
        $questionsAnswers[$i]['question'] = $question;
        $questionsAnswers[$i]['answer'] = $answer;
    }

    startEngine(DESCRIPTION, $questionsAnswers);
}
