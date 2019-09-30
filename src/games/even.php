<?php

namespace BrainGames\Even;

const DESCRIPTION = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

function is_even($value)
{
    return $value % 2 === 0 ? true : false;
}

function evenDefine()
{
    //записываем вопросы и ответы в массив
    $countValues = 3;
    $questionsAnswers = [];
    for ($i = 0; $i < $countValues; $i++) {
        $questionsAnswers[$i]['question'] = rand(1, 100);
        $questionsAnswers[$i]['answer'] = is_even($questionsAnswers[$i]['question']) ? 'yes' : 'no';
    }

    //вызов движка приложения с переданными параметрами
    engine(DESCRIPTION, $questionsAnswers);
}
