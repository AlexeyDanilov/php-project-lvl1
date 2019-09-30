<?php

namespace BrainGames\Prime;

const DESCRIPTION = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

function is_prime($val)
{
    if ($val < 2) {
        return false;
    } elseif ($val === 2) {
        return true;
    }

    for ($i = 2; $i <= $val / 2; $i++) {
        if ($val % $i === 0) {
            return false;
        }
    }
    return true;
}


function checkNumberForSimplicity()
{
    $countValues = 3;
    $questionsAnswers = [];
    for ($i = 0; $i < $countValues; $i++) {
        $questionsAnswers[$i]['question'] = rand(1, 50); // записываем вопрос в массив
        $questionsAnswers[$i]['answer'] = is_prime($questionsAnswers[$i]['question']) ? 'yes' : 'no';
    }

    //вызов движка приложения с переданными параметрами
    engine(DESCRIPTION, $questionsAnswers);
}
