<?php

require_once "Dog.php";

$lady = new Dog("Lady", Dog::FEMALE);
$sam = new Dog("Sam", Dog::MALE);
$molly = new Dog("Molly", Dog::FEMALE);
$rocky = new Dog("Rocky", Dog::MALE, $molly, $sam);
$max = new Dog("Max", Dog::MALE,  $lady, $rocky);
$sparky = new Dog("Sparky", Dog::MALE);
$buster = new Dog("Buster", Dog::MALE, $lady, $sparky);
$coco = new Dog("Coco", Dog::FEMALE, $molly, $buster);


$dogs = [
    $max,
    $rocky,
    $sparky,
    $sam ,
    $lady,
    $molly,
    $coco,
    $buster

];

foreach ($dogs as $dog) {
    echo $dog->getName() . "  ". $dog->getGender() . "\n";
    if ($dog->getMother() !== null) {
        echo "Mother: " . $dog->getMother()->getName() . "\n";
    }
    if ($dog->getFather() !== null) {
        echo "Father: " . $dog->getFather()->getName() . "\n";
    }
}

var_dump($coco->sameMotherAs($rocky));



