<?php

namespace BrainGames\run;

use function BrainGames\Calc\calc;
use function BrainGames\Even\even;

function run($func)
{
    switch ($func) {
        case 'calc':
            calc();
            break;

        case 'even':
            even();
            break;
    }
}
