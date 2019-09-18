<?php

namespace BrainGames\Even;


function even()
{
    $text = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

    //Выбор переменных для 3-х вопросов (вопросы)
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $num3 = rand(1, 100);

    if ($num1 % 2 === 0) {
        $val1 = 'yes';
    } else {
        $val1 = 'no';
    }

    if ($num2 % 2 === 0) {
        $val2 = 'yes';
    } else {
        $val2 = 'no';
    }

    if ($num3 % 2 === 0) {
        $val3 = 'yes';
    } else {
        $val3 = 'no';
    }

    //записываем вопросы и ответы в массив
    $allParameters = [$num1, $num2, $num3];
    $allTruthVal = [$val1, $val2, $val3];


    //вызов движка приложения с переданными параметрами
    engine($text, $allParameters, $allTruthVal);
}
