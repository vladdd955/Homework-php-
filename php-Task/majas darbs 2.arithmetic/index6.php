<?php

for($i = 1; $i <= 110; $i++) {
    if($i % 3 == 0) {
        echo  'Coza';
    } elseif ($i % 5 == 0) {
        echo 'Loza';
    } elseif ($i % 7 == 0) {
        echo 'Woza';
    } elseif ($i % 3 == 0 & $i % 5 == 0) {
        echo 'CozaLoza';
    } else {
        echo $i;
    }

    if($i % 11 == 0) {
        echo "  ";
    }
}