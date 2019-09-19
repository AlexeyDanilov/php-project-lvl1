<?php

namespace BrainGames\Calc;

function getResult($v1, $v2, $act)
{
    switch ($act) {
        case '+':
            return $v1 + $v2;

        case '-':
            return $v1 - $v2;

        case '*':
            return $v1 * $v2;
    }
}


function calc()
{
    $text = "What is the result of the expression?";
    $action = ['+', '-', '*'];

    //Выбор адействия для 3-х вопросов
    $indexAction1 =  array_rand($action, 1);
    $act1 = $action[$indexAction1];

    $indexAction2 =  array_rand($action, 1);
    $act2 = $action[$indexAction2];

    $indexAction3 =  array_rand($action, 1);
    $act3 = $action[$indexAction3];

    //Выбор переменных для 3-х вопросов
    $val1_1 = rand(1, 10);
    $val1_2 = rand(1, 10);

    $val2_1 = rand(1, 10);
    $val2_2 = rand(1, 10);

    $val3_1 = rand(1, 10);
    $val3_2 = rand(1, 10);

    //Вопросы
    $task1 = "{$val1_1} {$act1} {$val1_2}";
    $task2 = "{$val2_1} {$act2} {$val2_2}";
    $task3 = "{$val3_1} {$act3} {$val3_2}";

    //Правильные ответы
    $res1 = getResult($val1_1, $val1_2, $action[$indexAction1]);
    $res2 = getResult($val2_1, $val2_2, $action[$indexAction2]);
    $res3 = getResult($val3_1, $val3_2, $action[$indexAction3]);

    //Запись в массив вопросов и правильных ответов
    $allParameters = [$task1, $task2, $task3];
    $allTruthVal = [$res1, $res2, $res3];

    //вызов движка приложения с переданными параметрами
    engine($text, $allParameters, $allTruthVal);
}
