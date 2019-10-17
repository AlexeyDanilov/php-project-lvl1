<?php

namespace BrainGames\Calc;

const DESCRIPTION = "What is the result of the expression?";
const ACTIONS = ['+', '-', '*'];

function getResult($value1, $value2, $actionSymbol)
{
    switch ($actionSymbol) {
        case '+':
            return $value1 + $value2;

        case '-':
            return $value1 - $value2;

        case '*':
            return $value1 * $value2;
    }
}

function makeCalculation()
{
    $questionsAnswers = [];
    for ($i = 0; $i < ROUNDSCOUNT; $i++) {
        $actionSymbol = ACTIONS[array_rand((array)ACTIONS, 1)];
        $value1 = rand(1, 10);
        $value2 = rand(1, 10);
        $question = "{$value1} {$actionSymbol} {$value2}";
        $answer = getResult($value1, $value2, $actionSymbol);
        $questionsAnswers[$i]['question'] = $question;
        $questionsAnswers[$i]['answer'] = $answer;
    }

    startEngine(DESCRIPTION, $questionsAnswers);
}
