<?php

namespace BrainGames\Gcd;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";

function сalculateGreatestCommonDivider($val1, $val2)
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
    $questionsAnswers = [];
    for ($i = 0; $i < ROUNDSCOUNT; $i++) {
        $value1 = rand(1, 50);
        $value2 = rand(1, 50);
        $question = "{$value1} {$value2}";
        $answer = сalculateGreatestCommonDivider($value1, $value2);
        $questionsAnswers[$i]['question'] = $question;
        $questionsAnswers[$i]['answer'] = $answer;
    }

    startEngine(DESCRIPTION, $questionsAnswers);
}
