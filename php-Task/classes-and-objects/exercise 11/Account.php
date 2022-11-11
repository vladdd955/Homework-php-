<?php

class Account
{
    private int $balance;
    private string $name;

    public function __construct(float $balance, string $name)
    {
        $this->balance = $balance;
        $this->name = $name;
    }


    public function getBalance(): int
    {
        return $this->balance;
    }
    public function printData()
    {
        return "Account: " . $this->name . "Balance: " . $this->getBalance();
    }



    public function setWithdrawal($withdrawal): void
    {
        $this->balance -= $withdrawal;
    }

    public function setBalance($newBalance): void
    {
        $this->balance += $newBalance;
    }

    function transfer(Account $from, Account $to, int $howMuch): void
    {
        $from->setWithdrawal($howMuch);
        $to->setBalance($howMuch);
    }

}

