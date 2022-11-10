<?php

class SavingsAccount
{
    private float $amount;
    private float $rate;

    public function __construct(float $amount, float $rate)
    {
        $this->amount = $amount;
        $this->rate = $rate;
    }


    public function interest(): void
    {
        $this->amount += $this->amount * $this->rate / 12;
    }

    public function addBalance($newDeposit): void
    {
        $this->amount += $newDeposit;
    }

    public function remoteBalance($withdrawal): void
    {
        $this->amount -= $withdrawal;
    }



    public function getAmount()
    {
        return $this->amount;
    }

}

