<?php

namespace BrainGames\Progression;

const DESCRIPTION = "What number is missing in the progression?";
const LENGTH_PROGRESSION = 10;

function getProgression($step, $firstValue, $lengthProgression)
{
    $progression = [];
    for ($i = 0; $i < $lengthProgression; $i++) {
        $progression[$i] = $firstValue + $i * $step;
    }
    return $progression;
}

function writeMissingValue()
{
    $questionsAnswers = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $step = rand(1, 10);
        $firstValue = rand(1, 100);
        $progression = getProgression($step, $firstValue, LENGTH_PROGRESSION);
        $progressionDouble = $progression;
        $hiddenValueIndex = rand(0, LENGTH_PROGRESSION - 1);
        $progressionDouble[$hiddenValueIndex] = '..';
        $question = implode(' ', $progressionDouble);
        $answer = $progression[$hiddenValueIndex];
        $questionsAnswers[$i]['question'] = $question;
        $questionsAnswers[$i]['answer'] = $answer;
    }

    startEngine(DESCRIPTION, $questionsAnswers);
}
