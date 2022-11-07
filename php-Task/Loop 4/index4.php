<?php

class FizzBuzz {

    public static function start(): void {
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 === 0){
                echo "Fizz ";
            }elseif ($i % 5 === 0) {
                echo "Buzz ";
            }elseif ($i % 3 === 0 && $i % 5 === 0) {
                echo "FizzBuzz ";
            } else {
                echo $i . " ";
            }
            if ($i % 20 === 0) {
                echo "\n";
            }
        }

    }
}
$app = new FizzBuzz();
$app->start();
































