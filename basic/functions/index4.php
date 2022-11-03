<?php

$input = [
    $person = new stdClass(),
    $person->name = 'Bob',
    $person->age =  19
];

foreach($input as $key => $value) {
    if($input[2] > 18) {
        echo 'person has reached 18 ';
    }
}

