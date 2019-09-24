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

function progression()
{
    $countQuestions = 3;
    $allParameters = []; // Массив для записи в него вопросов
    $allTruthVal = []; // Массив для записи в него правильных ответов
    for ($i = 0; $i < $countQuestions; $i++) {
        $parameters = getDetails();
        $parametersDouble = $parameters;
        $question = rand(0, 9);
        $parametersDouble[$question] = '..';
        $allParameters[$i] = implode(' ', $parametersDouble);
        $allTruthVal[$i] = $parameters[$question];
    }

    //вызов движка приложения с переданными параметрами
    engine(DESCRIPTION, $allParameters, $allTruthVal);
}
