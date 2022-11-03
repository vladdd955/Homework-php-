<?php

$input = [
    [
        "apple" => 5,
        "banana" => 11,
    ]
];

$delivery = [
    [
        "weight over 10 kg" => 6,
        "weight under 10 kg" => 3,
    ]
];


function func($input, $delivery) {
    if($input[0]['apple'] < 10 ) {
        echo " apple  shipping amount " . $delivery[0]["weight under 10 kg"];
    } else {
        echo " apple  shipping amount " . $delivery[0]["weight over 10 kg"];
    }
    if($input[0]["banana"] < 10) {
        echo " banana shipping amount " . $delivery[0]["weight under 10 kg"];
    } else {
        echo " banana shipping amount " . $delivery[0]["weight over 10 kg"];
    }
}
func($input, $delivery);

