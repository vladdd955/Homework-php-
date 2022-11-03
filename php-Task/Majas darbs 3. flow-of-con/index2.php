<?php

function checkNum($num)
{

    if($num > 0) {
        echo ' Number is positive ';
    } elseif ($num < 0) {
        echo 'Number is negative ';
    } elseif ($num === 0) {
        echo 'Numbers is = 0';
    } elseif(is_string($num)) {     // atgriez 1 ja value ir  'string'. ta del terminaali bus positive number.
        echo '  ';                  // Nav jeegas rakstit inputu vins neizvadis vinu.
    }


}

checkNum(-7);
echo "\n";

