<?php

$weight = 71;
$height = 180;

function func($weight, $height)
{
    $bmi = $weight / ($height * $height) * 10000;
    return $bmi;
}

$bmi = func($weight, $height);

if($bmi >= 18.5 & $bmi <= 25) {
    echo ' Your have a normal weight ';

}elseif ($bmi < 18.5) {
    echo ' Your have a underweight ';

}elseif ($bmi > 25) {
    echo ' Your have a overweight';
}
