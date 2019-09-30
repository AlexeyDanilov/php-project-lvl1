<?php

namespace BrainGames\Progression;

const DESCRIPTION = "What number is missing in the progression?";

function getDetails()
{
    $step = rand(1, 10);
    $firstVal = rand(1, 100);
    $count = 10;
    $values = [];
    for ($i = 0, $j = $firstVal; $i < $count; $i++, $j += $step) {
        $values[$i] = $j;
    }
    return $values;
}

function writeMissingValueInProgression()
{
    $countValues = 3;
    $questionsAnswers = [];
    for ($i = 0; $i < $countValues; $i++) {
        $parameters = getDetails();
        $parametersDouble = $parameters;
        $question = rand(0, 9);
        $parametersDouble[$question] = '..';
        $questionsAnswers[$i]['question'] = implode(' ', $parametersDouble);
        $questionsAnswers[$i]['answer'] = $parameters[$question];
    }

    //вызов движка приложения с переданными параметрами
    engine(DESCRIPTION, $questionsAnswers);
}
