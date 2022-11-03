<?php

$person = new stdClass();
$person->name = 'Bob';
$person->money = 200;
$person->licenses = ['A', 'B', 'C'];



function createWeapon($name, $license, $price)
{
    $weapon = new stdClass();
    $weapon->name = $name;
    $weapon->license = $license;
    $weapon->price = $price;
    return $weapon;
}

$weapons = [
    createWeapon('Pistol', 'A', 100),
    createWeapon('AK47', 'C', 250),
    createWeapon('Knife', 'B', 50)
] ;

$licensesText = implode(',', $person->licenses);
echo "Welcome, {$person->name} ({$person->money})  [{$licensesText}]";
echo PHP_EOL;


foreach($weapons as $key => $weapon)
{
    echo " [{$key}] {$weapon->name} ({$weapon->price}$) [{$weapon->license}]". PHP_EOL;
}

$selection = (int) readline('Enter weapon to purchase ');

$selectedWeapon = $weapons[$selection];

if($selectedWeapon === null) {
    echo 'Invalid selection' ;
    exit;
}

if($person->money < $selectedWeapon->price) {
    echo 'Your money not enough ';
    exit;
}

if(! in_array($selectedWeapon->license, $person->licenses) ) {
    echo 'Invalid license';
    exit;
}

$person->money -= $selectedWeapon->price;
echo "Thank for purchase  {$selectedWeapon->name}";
echo PHP_EOL;
