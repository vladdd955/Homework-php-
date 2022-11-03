<?php

function PhoneKeyPad()
{
    $userSelection = readline('Enter character -> ' );

    if(ctype_upper($userSelection)) {
        $userSelection = strtolower($userSelection);
    }

    if($userSelection == 'a' || $userSelection == 'b' || $userSelection == 'c') {
        echo  2;
    } elseif ($userSelection == 'd' || $userSelection == 'e' || $userSelection == 'f') {
        echo 3;
    } elseif ($userSelection == 'g' || $userSelection == 'h' || $userSelection == 'i') {
        echo 4;
    } elseif ($userSelection == 'j' || $userSelection == 'k' || $userSelection == 'l') {
        echo 5;
    } elseif ($userSelection == 'm' || $userSelection == 'n' || $userSelection == 'o') {
        echo 6;
    } elseif ($userSelection == 'p' || $userSelection == 'q' || $userSelection == 'r' || $userSelection == 's') {
        echo 7;
    } elseif ($userSelection == 't' || $userSelection == 'u' || $userSelection == 'v') {
        echo 8;
    } elseif ($userSelection == 'w' || $userSelection == 'x' || $userSelection == 'y' || $userSelection == 'z') {
        echo 9;
    } else {
        echo 'Invalid input !!!';

    }

}
PhoneKeyPad();
