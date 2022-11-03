<?php

$person = new stdClass();
$person->name = 'Bob';
$person->surname = 'Blackwood';
$person->age = 19;

function ageDeter($person) {
    if($person->age < 18) {
        echo 'person is younger than 18 ';
    } else {
        echo 'person has reached 18 ';
    }
};

ageDeter($person);

