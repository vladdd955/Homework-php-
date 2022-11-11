<?php

class Account
{

    private string $name;
    private float $balance;


    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setWithdrawal($withdrawal): float
    {
        return $this->balance -= $withdrawal;


    }

    public function setDeposit($deposit): float
    {
        return $this->balance += $deposit;

    }
}


class Bank
{
    private Account $firstAcc;
    private Account $secondAcc;

    public function __construct(Account $firstAcc, Account $secondAcc)
    {
        $this->firstAcc = $firstAcc;
        $this->secondAcc = $secondAcc;
    }

    public function transfer(int $howMuch): float
    {
        $withdrawal = $this->firstAcc->setWithdrawal($howMuch);
        return $this->secondAcc->setDeposit($withdrawal);

    }


}


