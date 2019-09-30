<?php

namespace BrainGames\Calc;

const DESCRIPTION = "What is the result of the expression?";

function getResult($value1, $value2, $actions)
{
    switch ($actions) {
        case '+':
            return $value1 + $value2;

        case '-':
            return $value1 - $value2;

        case '*':
            return $value1 * $value2;
    }
}


function calculate()
{
    $actions = ['+', '-', '*'];
    $countValues = 3;
    $questionsAnswers = [];
    for ($i = 0; $i < $countValues; $i++) {
        $indexAction =  array_rand((array)$actions, 1); // ищем индекс массива действий
        $actionSymbol = $actions[$indexAction]; // получаем сам знак
        $value1 = rand(1, 10); // определяем первое значение
        $value2 = rand(1, 10); // определяем второе значение
        $questionsAnswers[$i]['question'] = "{$value1} {$actionSymbol} {$value2}";
        $questionsAnswers[$i]['answer'] = getResult($value1, $value2, $actionSymbol);
    }

    //вызов движка приложения с переданными параметрами
    engine(DESCRIPTION, $questionsAnswers);
}
