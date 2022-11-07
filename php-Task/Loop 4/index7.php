<?php

class RollTwoDice
{
    public function request(): void
    {
        do{

            $sum = readline("Enter sum: -> ");

        } while($sum === false || $sum <= 0);


         while(true){
             $randSum = rand(1,6);
             $randSum2 = rand(1,6);
             $result = $randSum + $randSum2;
             echo $randSum . " and " . $randSum2 . " = " . $result . "\n";
             if($result == $sum) {
                 break;
             }
         }
    }
}

$program = new RollTwoDice();
$program->request();