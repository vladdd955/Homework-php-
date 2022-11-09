<?php

require_once "Odometer.php";
require_once "FuelGauge.php";


$fuelGauge = new FuelGauge(6);
$odometer = new Odometer();

while($fuelGauge->getAmount() > 0) {

    echo "We drove 1km \n";
    $odometer->increment();

    if ($fuelGauge->getAmount() <= 5){
        $fuelGauge->fill(20);
        echo "You fill your car in 20 liters \n";
    }

    if ($odometer->getMileage() % 10 === 0) {
        $fuelGauge->use(1) . "\n";
        echo "Car used 1 liter \n";

    }
    echo " Odometer report = " . $odometer->getMileage() . " km |  Fuel report =  " . $fuelGauge->getAmount() . " liters\n";

    sleep(1);
}
