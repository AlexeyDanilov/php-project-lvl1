<?php

namespace BrainGames\Progression;


function details()
{
    $step = rand(1, 10);
    $firstVal = rand(1, 100);
    $count = 10;
    $arr = [];
    for ($i = 0, $j = $firstVal; $i < $count; $i++, $j += $step) {
        $arr[$i] = $j;
    }
    return $arr;
}

function progression()
{
    $text = "What number is missing in the progression?";

    //Формирование прогрессии для 3-х вопросов
    $parameters1 = details();
    $parametersDouble1 = $parameters1;
    $question1 = rand(0, 9);
    $parametersDouble1[$question1] = '..';
    $str1 = implode(' ', $parametersDouble1);

    $parameters2 = details();
    $parametersDouble2 = $parameters2;
    $question2 = rand(0, 9);
    $parametersDouble2[$question2] = '..';
    $str2 = implode(' ', $parametersDouble2);

    $parameters3 = details();
    $parametersDouble3 = $parameters3;
    $question3 = rand(0, 9);
    $parametersDouble3[$question3] = '..';
    $str3 = implode(' ', $parametersDouble3);

    //Запись в массив вопросов и правильных ответов
    $allParameters = [$str1, $str2, $str3];
    $allTruthVal = [$parameters1[$question1], $parameters2[$question2], $parameters3[$question3]];

    //вызов движка приложения с переданными параметрами
    engine($text, $allParameters, $allTruthVal);
}
