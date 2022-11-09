<?php


class Product
{
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function printProduct()
    {
        echo $this->name . "price " . $this->price . ", amount " . $this->amount . "\n";

    }


    //Getter.
    public function getName()
    {
        return $this->name;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getPrice()
    {
        return $this->price;
    }

    // Setter
    public function setAmount($newAmount)
    {
        return $this->amount = $newAmount;
    }

    public function setPrice($newPrice)
    {
        return $this->price = $newPrice;
    }


}

$program1 = new Product("Banana,", 1.1, 13);
$program1->printProduct();

echo "\n";


class TestCode

{
//    private string $name;
//    private float $price;
//    private int $amount;


    public static function main()
    {
        $logitech = new Product("Logitech mouse", 70.000, 14);
        $iPoh = new Product("iPhone 5s", 999.99, 3);
        $epsion = new Product("Epson EB-U05", 440.46, 1);

        $logitech->setPrice(111.00);
        $logitech->setAmount(333);
        $iPoh->setPrice(111.00);
        $iPoh->setAmount(333);


        $element = [
            $logitech,
            $iPoh,
            $epsion,
        ];

        foreach ($element as $value) {
            echo $value->getName() . " cost: " . $value->getPrice() . " amount: " . $value->getAmount() . "\n";
        }

    }

}

TestCode::main();
