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
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $action = ACTIONS[array_rand(ACTIONS, 1)];
        $value1 = rand(1, 10);
        $value2 = rand(1, 10);
        $question = "$value1 $action $value2";
        $answer = getResult($value1, $value2, $action);
        $questionsAnswers[$i]['question'] = $question;
        $questionsAnswers[$i]['answer'] = $answer;
    }

    startEngine(DESCRIPTION, $questionsAnswers);
}
