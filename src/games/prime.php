<?php

namespace BrainGames\Prime;

const DESCRIPTION = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

function is_prime($val)
{
    if ($val < 2) {
        return false;
    }

    for ($i = 2; $i < $val / 2; $i++) {
        if ($val % $i === 0) {
            return false;
        }
    }
    return true;
}


function prime()
{
    //Выбор значений для вопросов
    $val1 = rand(1, 50);
    $val2 = rand(1, 50);
    $val3 = rand(1, 50);

    //Правильные ответы на вопросы
    $res1 = is_prime($val1) ? 'yes' : 'no';
    $res2 = is_prime($val2) ? 'yes' : 'no';
    $res3 = is_prime($val3) ? 'yes' : 'no';

    //Запись в массив вопросов и правильных ответов
    $allParameters = [$val1, $val2, $val3];
    $allTruthVal = [$res1, $res2, $res3];

    //вызов движка приложения с переданными параметрами
    engine(DESCRIPTION , $allParameters, $allTruthVal);
}
