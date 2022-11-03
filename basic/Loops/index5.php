<?php

$item = [
    [
        "name" => "Ben ",
        "surname" => " Hoopless ",
        "age" => " 33 ",
        "birthday" => " 25.11 "
    ],

    [
        "name" => " Kate ",
        "surname" => " Cheeslover ",
        "age" => " 25 ",
        "birthday" => " 16.09 "
    ],

    [
        "name" => " Tom ",
        "surname" => " Jerrysfrends ",
        "age" => " 36 ",
        "birthday" => " 18.02 "
    ],
];

$firstPer = $item[0]['name'] . $item[0]['surname'] . $item[0]['age'] . $item[0]['birthday'];
$secondPer = $item[1]['name'] . $item[1]['surname'] . $item[1]['age'] . $item[1]['birthday'];
$thirdPer = $item[2]['name'] . $item[2]['surname'] . $item[2]['age'] . $item[2]['birthday'];

echo $firstPer . ' ' . $secondPer . ' ' . $thirdPer;