<?php

namespace BrainGames\Gcd;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";

function calculation($val1, $val2)
{
    $min = min($val1, $val2);
    for ($i = $min; $i >= 1; $i--) {
        if ($val1 % $i === 0 && $val2 % $i === 0) {
            return $i;
        }
    }
}


function get_gcd()
{
    //Выбор переменных для 3-х вопросов
    $val1_1 = rand(1, 100);
    $val1_2 = rand(1, 100);

    $val2_1 = rand(1, 100);
    $val2_2 = rand(1, 100);

    $val3_1 = rand(1, 100);
    $val3_2 = rand(1, 100);

    //Вопросы
    $task1 = "{$val1_1} {$val1_2}";
    $task2 = "{$val2_1} {$val2_2}";
    $task3 = "{$val3_1} {$val3_2}";

    //Правильные ответы
    $res1 = calculation($val1_1, $val1_2);
    $res2 = calculation($val2_1, $val2_2);
    $res3 = calculation($val3_1, $val3_2);

    //Запись в массив вопросов и правильных ответов
    $allParameters = [$task1, $task2, $task3];
    $allTruthVal = [$res1, $res2, $res3];

    //вызов движка приложения с переданными параметрами
    engine(DESCRIPTION , $allParameters, $allTruthVal);
}
