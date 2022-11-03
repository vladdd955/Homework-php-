<?php

$employee1 = new stdClass();
$employee1->basePay = 7.50;
$employee1->hoursWorked = 35;

$employee2 = new stdClass();
$employee2->basePay = 8.20;
$employee2->hoursWorked = 47;

$employee3 = new stdClass();
$employee3->basePay = 10.00;
$employee3->hoursWorked = 73;


$salary1 = $employee1->basePay * $employee1->hoursWorked;
$salary2 = $employee2->basePay * $employee2->hoursWorked;
$salary3 = $employee3->basePay * $employee3->hoursWorked;

$overHours1 = $employee1->hoursWorked - 40;
$overHours2 = $employee2->hoursWorked - 40;
$overHours3 = $employee3->hoursWorked - 40;

$overP1 = $overHours1 * 1.5 * $employee1->basePay;
$overP2 = $overHours2 * 1.5 * $employee2->basePay;
$overP3 = $overHours3 * 1.5 * $employee3->basePay;


if($employee1->basePay < 8) {
    echo 'Error, you have lower then 8$ an hour';
} elseif ($employee1->hoursWorked > 60) {
    echo 'Error, you have too much working hours';
} elseif ($employee1->hoursWorked > 40) {
    echo $overP1 + $salary1;
}

echo PHP_EOL;


if($employee2->basePay < 8) {
    echo 'Error, you have lower then 8$ an hour';
} elseif ($employee2->hoursWorked > 60) {
    echo 'Error, you have too much working hours';
} elseif ($employee2->hoursWorked > 40) {
    echo $overP2 + $salary2;
}

echo PHP_EOL;

if($employee3->basePay < 8) {
    echo 'Error, you have lower then 8$ an hour';
} elseif ($employee3->hoursWorked > 60) {
    echo 'Error, you have too much working hours';
} elseif ($employee3->hoursWorked > 40) {
    echo $overP3 + $salary3;
}