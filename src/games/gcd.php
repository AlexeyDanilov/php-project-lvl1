<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\hello;

function calculation($val1, $val2)
{
    $min = min($val1, $val2);
    for ($i = $min; $i >= 1; $i--) {
        if ($val1 % $i === 0 && $val2 % $i === 0) {
            return $i;
        }
    }
}

function gcd1()
{
    $name = hello("Find the greatest common divisor of given numbers.");
    $count = 0;
    while ($count < 3) {
        $val1 = rand(1, 100);
        $val2 = rand(1, 100);
        line("Question: {$val1} {$val2}");
        $answer = (int) prompt('Your answer');
        $res = calculation($val1, $val2);
        if ($answer === $res) {
            line('Correct');
            $count++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$res}'.
                Let's try again, {$name}!");
            return;
        }
    }

    if ($count === 3) {
        line("Congratulations, {$name}!");
    }
}

function gcd ()
{
    $text = "Find the greatest common divisor of given numbers.";

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
    engine($text, $allParameters, $allTruthVal);
}