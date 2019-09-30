<?php

namespace BrainGames\Gcd;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";

function calculate($val1, $val2)
{
    $min = min($val1, $val2);
    for ($i = $min; $i >= 1; $i--) {
        if ($val1 % $i === 0 && $val2 % $i === 0) {
            return $i;
        }
    }
}


function getGreatestCommonDivider()
{
    $countValues = 3;
    $questionsAnswers = [];
    for ($i = 0; $i < $countValues; $i++) {
        $value1 = rand(1, 50); // определяем первое значение
        $value2 = rand(1, 50); // определяем второе значение
        $questionsAnswers[$i]['question'] = "{$value1} {$value2}"; // записываем вопрос в массив
        $questionsAnswers[$i]['answer'] = calculate($value1, $value2); // записываем ответ в массив
    }

    //вызов движка приложения с переданными параметрами
    engine(DESCRIPTION, $questionsAnswers);
}
