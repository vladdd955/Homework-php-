<?php

require_once "balance.php";


$deposited = 0;
$withdrawn = 0;
$totalIntered = 0;

$amount = readline("How much money is in the account?: ");
$rate = readline("Enter the annual interest rate: ");

$app = new SavingsAccount($amount, $rate);

$time = readline("How long has the account been opened? ");


for ($i = 1; $i < $time; $i++) {
    $enterDeposite = (int) readline("Enter amount deposited for month: ");
    $app->addBalance($enterDeposite);
    $deposited += $enterDeposite;
    $removeDeposite = (int) readline("Enter amount withdrawn for ");
    $app->remoteBalance($removeDeposite);
    $withdrawn -= $removeDeposite;

    $interes = $app->getAmount();
    $app->interest();
    $totalIntered += $app->getAmount() - $interes;
}



echo "Total deposited: " . $deposited . "\n";
echo "Total withdrawn: " . $withdrawn . "\n";
echo "Interest earned: " . round($totalIntered). "\n";
echo "Ending balance: " . round($app->getAmount()) . "\n";