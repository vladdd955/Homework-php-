<?php

$num1 = [2, 7, 21, 33, 49, 58, 72, 88, 91, 56];
$num2 = [];

for($i = 0; $i < count($num1); $i++) {
    $num2[$i] = $num1[$i];
}

$changeEl = $num1[9] = -7;

for($i = 0; $i < count($num1); $i++) {
    echo $num1[$i] . ',';
}

echo PHP_EOL;

for($i = 0; $i < count($num2); $i++) {
    echo $num2[$i]. ',';
}
