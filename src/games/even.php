<?php

namespace BrainGames\Even;

const DESCRIPTION = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

function even()
{
    //записываем вопросы и ответы в массив
    $countQuestions = 3;
    $allParameters = [];
    $allTruthVal = [];
    for ($i = 0; $i < $countQuestions; $i++) {
        $allParameters[$i] = rand(1, 100);
        $allTruthVal[$i] = ($allParameters[$i] % 2) === 0 ? 'yes' : 'no';
    }

    //вызов движка приложения с переданными параметрами
    engine(DESCRIPTION, $allParameters, $allTruthVal);
}
