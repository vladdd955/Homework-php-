<?php

$words = [
    'airport',
    'sponge',
    'ship',
    'effort',
];

$word =  $words[array_rand($words)];
$letters = str_split($word);
$correctWord = str_split(str_repeat('-', strlen($word)));

echo implode('', $correctWord);
echo PHP_EOL;

$guesses = 0;
$maxGuesses = strlen($word) + 1;

while ($guesses < $maxGuesses  && in_array('-', $correctWord))
{
    $letter = readline('Enter char: ');
    $letterPosition = array_keys($letters, $letter);

    if(count($letterPosition) > 0) {
        foreach($letterPosition as $position) {
            $correctWord[$position] = $letter;
        }
    }

    echo "Word: " . implode('', $correctWord);
    echo PHP_EOL;
    $guesses++;

    echo PHP_EOL;
    echo "Guess:  " . $letter ;
    echo PHP_EOL;
    echo PHP_EOL;
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-";
    echo PHP_EOL;
}


if(in_array('-', $correctWord)) {
    echo '!!!You lose!!!';
}else{
    echo '!!!You win!!!';
}
