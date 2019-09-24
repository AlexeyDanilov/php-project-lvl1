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


function get_greatest_common_divider()
{
    $countQuestions = 3;
    $allParameters = []; // Массив для записи в него вопросов
    $allTruthVal = []; // Массив для записи в него правильных ответов
    for ($i = 0; $i < $countQuestions; $i++) {
        $value1 = rand(1, 10); // определяем первое значение
        $value2 = rand(1, 10); // определяем второе значение
        $allParameters[$i] = "{$value1} {$value2}"; // записываем вопрос в массив
        $allTruthVal[$i] = calculation($value1, $value2); // записываем ответ в массив
    }

    //вызов движка приложения с переданными параметрами
    engine(DESCRIPTION, $allParameters, $allTruthVal);
}
