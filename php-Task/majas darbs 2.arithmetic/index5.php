<?php

$numMin = 1;
$numMax = 100;
$randomNum = rand($numMin, $numMax) ;


$userSelection =  readline(" Try to guess it. ");

if($userSelection == $randomNum) {
    echo " You guessed it! ";

} elseif ($userSelection > $randomNum) {
    echo "Sorry, you are too high. ";

} elseif ($userSelection < $randomNum) {
    echo "Sorry, you are too low. ";
}


