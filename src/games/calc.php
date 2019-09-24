<?php

namespace BrainGames\Calc;

const DESCRIPTION = "What is the result of the expression?";

function getResult($value1, $value2, $action)
{
    switch ($action) {
        case '+':
            return $value1 + $value2;

        case '-':
            return $value1 - $value2;

        case '*':
            return $value1 * $value2;
    }
}


function calc()
{
    $action = ['+', '-', '*'];
    $countQuestions = 3;
    $allParameters = []; // Массив для записи в него вопросов
    $allTruthVal = []; // Массив для записи в него правильных ответов
    for ($i = 0; $i < $countQuestions; $i++) {
        $indexAction =  array_rand((array)$action, 1); // ищем индекс массива действий
        $actionSymbol = $action[$indexAction]; // получаем сам знак
        $value1 = rand(1, 10); // определяем первое значение
        $value2 = rand(1, 10); // определяем второе значение
        $allParameters[$i] = "{$value1} {$actionSymbol} {$value2}"; // записываем вопрос в массив
        $allTruthVal[$i] = getResult($value1, $value2, $actionSymbol); // записываем ответ в массив
    }

    //вызов движка приложения с переданными параметрами
    engine(DESCRIPTION, $allParameters, $allTruthVal);
}
