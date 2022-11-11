<?php

require_once "Account.php";

$mattAccount = new Account(1000, "Matt ");
$myAccount = new Account(0, "My account ");

$mattAccount->setWithdrawal(100);
$myAccount->setBalance(100);

echo $mattAccount->printData() . "\n";
echo $myAccount->printData() . "\n";

$A = new Account(100, "first account" );
$B = new Account(0, "second account");
$C = new Account(0, "third account");

$A->transfer($A,$B, 50);
$B->transfer($B, $C, 25);

echo $A->printData() . "\n";
echo $B->printData() ."\n";
echo $C->printData() . "\n";
