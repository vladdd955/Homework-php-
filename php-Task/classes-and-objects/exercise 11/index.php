<?php


require_once 'BankAccount.php';



$bartAcc = new Account("Barto's account", 100.00);
$bartSwissAccount = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state\n";
echo $bartAcc->getBalance() . PHP_EOL;
echo $bartSwissAccount->getBalance() . PHP_EOL;
$bartAcc->setWithdrawal(20);
echo $bartAcc->getName() . " balance is now: " . $bartAcc->getBalance() . PHP_EOL;
$bartSwissAccount->setDeposit(200);
echo $bartSwissAccount->getName() . " balance is now: ". $bartSwissAccount->getBalance() . PHP_EOL;
echo "Final state" . PHP_EOL;
echo $bartAcc->getBalance() . PHP_EOL;
echo $bartSwissAccount->getBalance() . PHP_EOL;

$mattAccount = new Account("Matt's account", 1000);
$myAccount = new Account("My account", 0);

$bank = new Bank($bartAcc,$bartSwissAccount);
$bank1 = new Bank($mattAccount, $myAccount);

$bank1->transfer(100);

echo "Name: " . $myAccount->getName() . PHP_EOL;
echo "Balance: " . $myAccount->getBalance() . PHP_EOL;
echo "Name: " . $mattAccount->getName() . PHP_EOL;
echo "Balance: " . $mattAccount->getBalance() . PHP_EOL;

$a = new Account("A", 100);
$b = new Account("B", 0);
$c = new Account("C", 0);

$bank3 = new Bank($a, $b);
$bank3->transfer(50);
echo "Account " .$a->getName() . " balance: " . $a->getBalance(). PHP_EOL;
echo "Account " .$b->getName() . " balance: " . $b->getBalance() . PHP_EOL;

$bank4 = new Bank($b, $c);
$bank4->transfer(25);
echo "Account " .$b->getName() . " balance: " . $b->getBalance(). PHP_EOL;
echo "Account " .$c->getName() . " balance: " . $c->getBalance() . PHP_EOL;




