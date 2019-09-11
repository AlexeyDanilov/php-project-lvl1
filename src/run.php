<?php

namespace BrainGames\run;

use function BrainGames\Calc\calc;
use function BrainGames\Even\even;
use function BrainGames\Gcd\gcd;
use function BrainGames\Progression\progression;

function run($func)
{
    switch ($func) {
        case 'calc':
            calc();
            break;

        case 'even':
            even();
            break;

        case 'gcd':
            gcd();
            break;

        case 'progression':
            progression();
            break;
    }
}
