<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;


function hello($text)
{
    line("Welcome to the Brain Games!\n
    $text");
    $name = prompt('May I have your name?');
    line("Hello,%s", $name);
    return $name;
}
