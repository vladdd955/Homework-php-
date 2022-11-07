<?php


class Piglet {
    public static function start(): void {


        echo "Welcome to Piglet \n";
        $count = 0;

            while(true) {
                $roll = rand(1, 6);

                echo "You rolled " . $roll . "\n";

                if ($roll === 1){
                    $count = 0;
                    break;
                }
                    $count += $roll;

                do{
                    $userSelection = readline("Roll again? y/q -> \n");
                } while($userSelection !== "y" && $userSelection !== "q");

                    if ($userSelection === "q") {
                        break;
                    }
            }
            echo "You got " . $count . "\n";
    }
}

$app = new Piglet();
$app->start();


