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
    //Формирование прогрессии для 3-х вопросов
    $parameters1 = getDetails();
    $parametersDouble1 = $parameters1;
    $question1 = rand(0, 9);
    $parametersDouble1[$question1] = '..';
    $str1 = implode(' ', $parametersDouble1);

    $parameters2 = getDetails();
    $parametersDouble2 = $parameters2;
    $question2 = rand(0, 9);
    $parametersDouble2[$question2] = '..';
    $str2 = implode(' ', $parametersDouble2);

    $parameters3 = getDetails();
    $parametersDouble3 = $parameters3;
    $question3 = rand(0, 9);
    $parametersDouble3[$question3] = '..';
    $str3 = implode(' ', $parametersDouble3);

    //Запись в массив вопросов и правильных ответов
    $allParameters = [$str1, $str2, $str3];
    $allTruthVal = [$parameters1[$question1], $parameters2[$question2], $parameters3[$question3]];

    //вызов движка приложения с переданными параметрами
    engine(DESCRIPTION , $allParameters, $allTruthVal);
}
