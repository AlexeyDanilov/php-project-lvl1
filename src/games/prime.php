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


function prime()
{
    $countQuestions = 3;
    $allParameters = []; // Массив для записи в него вопросов
    $allTruthVal = []; // Массив для записи в него правильных ответов
    for ($i = 0; $i < $countQuestions; $i++) {
        $allParameters[$i] = rand(1, 50); // записываем вопрос в массив
        $allTruthVal[$i] = is_prime($allParameters[$i]) ? 'yes' : 'no'; // записываем ответ в массив
    }

    //вызов движка приложения с переданными параметрами
    engine(DESCRIPTION, $allParameters, $allTruthVal);
}
