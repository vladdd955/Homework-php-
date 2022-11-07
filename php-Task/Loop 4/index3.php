<?php

$word = readline("Enter first word:");
$word2 = readline("Enter second word:");

$dot = 30;

$dotSum = $dot - strlen($word) - strlen($word2);
echo $word;
for ($i = 0; $i < $dotSum; $i++) {
    echo  '.';
}
echo $word2;

