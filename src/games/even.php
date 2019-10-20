<?php

namespace BrainGames\Even;

const DESCRIPTION = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

function isEven($value)
{
    return $value % 2 === 0;
}

function defineEven()
{
    $questionsAnswers = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        $questionsAnswers[$i]['question'] = $question;
        $questionsAnswers[$i]['answer'] = $answer;
    }

    startEngine(DESCRIPTION, $questionsAnswers);
}
