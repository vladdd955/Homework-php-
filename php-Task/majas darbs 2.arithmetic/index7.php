<?php

$a = -9.81;
$t = 10;
$Vi = 0;
$Xi = 0;


function func($a, $t, $Vi, $Xi): float
{
    $sum = $Xi * $t;
    $result = ($sum =  0.5 * $a * pow($t, 2) + $Vi * $t + $Xi);
    echo $result . "m ";
    return $result + $sum;
}


func($a, $t, $Vi, 10);

