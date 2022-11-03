<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$userSelection = readline();

if(in_array($userSelection, $numbers)) {
    echo 'The value entered into the array.';
} else {
    echo 'The entered value is not in the array.';
}