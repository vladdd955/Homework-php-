<?php

class Energy
{

    private int $surveyed;
    private float $energyDrinks;
    private float $citrusDrinks;

    public function __construct(int $surveyed, float $energyDrinks, float $citrusDrinks)
    {
        $this->surveyed = $surveyed;
        $this->energyDrinks = $energyDrinks;
        $this->citrusDrinks = $citrusDrinks;
    }

    public function getSurveyed():float
    {
        return $this->surveyed;
    }



    public function countPerWeek(): float
    {
        return $this->surveyed * $this->energyDrinks;                  // 1745.38
    }

    public function preferCitrus(): float
    {
       return $this->surveyed * $this->citrusDrinks;                  // 7978.88
    }


}

$a = new Energy(12467,0.14, 0.64);


echo "Total number of people surveyed " .$a->getSurveyed() . "\n";
echo "Approximately " . $a->countPerWeek() . " bought at least one energy drink \n";
echo  $a->preferCitrus() . " of those " . "prefer citrus flavored energy drinks. \n";


