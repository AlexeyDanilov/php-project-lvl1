<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;


function run()
{
    line("Welcome to the Brain Games!");
    $name = prompt('May I have your name?');
    line("Hello,%s", $name);
}

function even()
{
    line("Welcome to the Brain Games!");
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    $name = prompt('May I have your name?');
    line("Hello,%s", $name);
    $count = 0;
    while ($count < 3) {
        $num = rand(1, 100);
        $answer = prompt("Question: {$num}");
        if ($num % 2 === 0 && $answer === 'yes') {
            line("Correct!");
            $count++;
        } elseif ($num % 2 !== 0 && $answer === 'no') {
            line("Correct!");
            $count++;
        } elseif ($num % 2 === 0 && $answer === 'no') {
            line("'no' is wrong answer ;(. Correct answer was 'yes'.
                Let's try again, {$name}!");
            break;
        } elseif ($num % 2 !== 0 && $answer === 'yes') {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.
                Let's try again, {$name}!");
            break;
        } elseif ($answer !== 'yes' || $answer !== 'no') {
            line("'{$answer}' is wrong answer ;(.
                Let's ty again, {$name}!");
            break;
        }
    }
    if ($count === 3) {
        line("Congratulations, {$name}!");
    } else {
        return;
    }
}

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

    line("Welcome to the Brain Games!");
    $name = prompt('May I have your name?');

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
}
