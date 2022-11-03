<?php

$input = [10, 20, 30, 10.5, 'apple'];

function func($number)
{
    return $number * 2;

}

for($i = 0; $i < count($input); $i++) {
    $number = $input[$i];

    if(is_int($number)) {
        echo func($number) . ',';
    }
}
