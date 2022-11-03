<?php

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

$firstPer = $items[0][0]['name'];
$secondPer = $items[0][1]['name'];
$secondPerSurname = $items[0][1]['surname'];

echo $firstPer . ' & ' . $secondPer . " $secondPerSurname`s ";