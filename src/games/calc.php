<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\hello;

function result($v1, $v2, $act)
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
    $action = ['+', '-', '*'];
    $val1 = 0;
    $val2 = 0;
    $count = 0;

    $name = hello('What is the result of the expression?');

    while ($count < 3) {
        $val1 = rand(1, 10);
        $val2 = rand(1, 10);
        $indexAction =  array_rand($action, 1);
        $act = $action[$indexAction];
        $res = result($val1, $val2, $action[$indexAction]);
        line("Question: {$val1} {$act} {$val2}");
        $answer = (int) prompt("Your answer");
        if ($answer === $res) {
            line('Correct!');
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
