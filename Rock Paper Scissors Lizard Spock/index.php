<?php

require_once 'Element.php';
require_once 'Game.php';
require_once 'Player.php';

$user = new Player();
$computer = new Player('computer');

$rock = new Element('Rock');
$paper = new Element('Paper');
$scissors = new Element('Scissors');
$lizard = new Element('Lizard');
$spock = new Element('Spock');

$elements = [
    $rock,
    $paper,
    $scissors,
    $lizard,
    $spock
];

$rock->setBeats($paper);
$rock->setBeats($lizard);

$paper->setBeats($scissors);
$paper->setBeats($spock);

$scissors->setBeats($paper);
$scissors->setBeats($lizard);

$lizard->setBeats($spock);
$lizard->setBeats($paper);

$spock->setBeats($scissors);
$spock->setBeats($rock);

$userName = (string) readline('Enter your name: ');
$user->setName($userName);

foreach ($elements as $key => $element) {
    echo "[{$key}] {$element->getName()}" . PHP_EOL;
}
$selection = (int) readline('Enter element: ');

$user->setChoice($elements[$selection]);
$computer->setChoice($elements[array_rand($elements)]);

echo $user->getChoice()->getName() . " VS " . $computer->getChoice()->getName();
echo PHP_EOL;

$game = new Game($user, $computer);

$winner = $game->getWinner();

if ($winner === null) {
    echo "The game was tie!\n";
    exit;
}

echo "Winner: {$winner->getName()}\n";
