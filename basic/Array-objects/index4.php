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

$personName = $items[0][1]['name'];
$personSurname = $items[0][1]['surname'];
$personAge = $items[0][1]['age'];

echo $personName . ' ' . $personSurname . ' ' . $personAge;
