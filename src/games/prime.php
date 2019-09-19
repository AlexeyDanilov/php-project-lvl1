<?php

namespace BrainGames\Prime;


function get_value_info($val)
{
    if ($val < 2) {
        return 'no';
    }

    for ($i = 2; $i < $val / 2; $i++) {
        if ($val % $i === 0) {
            return 'no';
        }
    }
    return 'yes';
}


function prime()
{
    $text = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

    //Выбор значений для вопросов
    $val1 = rand(1, 50);
    $val2 = rand(1, 50);
    $val3 = rand(1, 50);

    //Правильные ответы на вопросы
    $res1 = get_value_info($val1);
    $res2 = get_value_info($val2);
    $res3 = get_value_info($val3);

    //Запись в массив вопросов и правильных ответов
    $allParameters = [$val1, $val2, $val3];
    $allTruthVal = [$res1, $res2, $res3];

    //вызов движка приложения с переданными параметрами
    engine($text, $allParameters, $allTruthVal);
}
