<?php

namespace BrainGames\Progression;

const DESCRIPTION = "What number is missing in the progression?";
const LENGTHPROGRESSION = 10;

function getDetails()
{
    $step = rand(1, 10);
    $firstVal = rand(1, 100);
    $values = [];
    for ($i = 0; $i < LENGTHPROGRESSION; $i++) {
        $values[$i] = $firstVal + $i * $step;
    }
    return $values;
}

function writeMissingValueInProgression()
{
    $questionsAnswers = [];
    for ($i = 0; $i < ROUNDSCOUNT; $i++) {
        $parameters = getDetails();
        $parametersDouble = $parameters;
        $indexSearchValue = rand(0, LENGTHPROGRESSION - 1);
        $parametersDouble[$indexSearchValue] = '..';
        $question = implode(' ', $parametersDouble);
        $answer = $parameters[$indexSearchValue];
        $questionsAnswers[$i]['question'] = $question;
        $questionsAnswers[$i]['answer'] = $answer;
    }

    startEngine(DESCRIPTION, $questionsAnswers);
}
