<?php

class BankAccount
{
    private string $name;
    private float $balance;


    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    function show_user_name_and_balance()
    {
        if ($this->balance < 0) {
            return $this->name . " , " . number_format(abs($this->balance), 2);
        } else {
        return $this->name . " , " . $this->balance;
        }
    }
}

$ben = new BankAccount("Benson", 17.25);
echo $ben->show_user_name_and_balance() . "\n";
$ben2 = new BankAccount("Benson", -17.5);
echo $ben2->show_user_name_and_balance() . "\n";