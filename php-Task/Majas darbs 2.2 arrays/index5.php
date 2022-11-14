<?php


$board = [
  [" "," "," "],
  [" "," "," "],
  [" "," "," "],
];


function displayBoard($board)
{
    echo " {$board[0][0]}  | {$board[0][1]}  | {$board[0][2]}  \n";
    echo "----+----+----\n";
    echo " {$board[1][0]}  | {$board[1][1]}  | {$board[1][2]}  \n";
    echo "----+----+----\n";
    echo " {$board[2][0]}  | {$board[2][1]}  | {$board[2][2]}  \n";
}


displayBoard($board);

$playerX = "X";
$playerO = "O";
$count = 0;
$currentPlayer = "X";

while(true) {
    $count++;

    $userSelection = readline("Enter chose [row,column] separate by , -> ");
    [$x, $y] = explode(",", $userSelection);

    if ($x === null && $y === null) {
        echo "Invalid input ";
        echo  "\n";
        continue;

    }
    if ($board[$x][$y] === " ") {
        $board[$x][$y] = $currentPlayer;
        displayBoard($board);
        echo  "\n";
    } else {
        echo "Invalid input, try again, make sure that board cell is empty :) \n";
        continue;
    }




            // Rows
    if ($board[0][0] === $board[0][1] && $board[0][0] === $board[0][2] && $board[0][2]  != " ") {
        echo $currentPlayer . "\n" . "Congratulation you Win in Rows combination \n";
        break;
    } elseif ($board[1][0] === $board[1][1] && $board[1][0] === $board[1][2] && $board[1][2]  != " ") {
        echo $currentPlayer . "\n" . "Congratulation you Win in Rows combination \n";
        break;
    } elseif ($board[2][0] === $board[2][1] && $board[2][0] === $board[2][2] && $board[2][2]  != " ") {
        echo $currentPlayer . "\n" . "Congratulation you Win in Rows combination \n";
        break;
                // Column
    } elseif ($board[0][0] === $board[1][0] && $board[0][0] === $board[2][0] && $board[2][0]  != " ") {
        echo $currentPlayer . "\n" . "Congratulation you Win in Column combination \n";
        break;
    } elseif ($board[0][1] === $board[1][1] && $board[0][1] === $board[2][1] && $board[2][1]  != " ") {
        echo $currentPlayer . "\n" . "Congratulation you Win in Column combination \n";
        break;
    } elseif ($board[0][2] === $board[1][2] && $board[0][2] === $board[2][2] && $board[2][2]  != " ") {
        echo $currentPlayer . "\n" . "Congratulation you Win in Column combination \n";
        break;
                // Diagonal
    } elseif ($board[0][0] === $board[1][1] && $board[0][0] === $board[2][2] && $board[2][2]  != " ") {
        echo $currentPlayer . "\n" . "Congratulation you Win in Diagonal combination \n";
        break;
    } elseif ($board[2][0] === $board[1][1] && $board[2][0] === $board[0][2] && $board[0][2]  != " ") {
        echo $currentPlayer . "\n" . "Congratulation you Win in Diagonal combination \n";
        break;
    }


    if ($count === 10){
        echo "Game is a TIE!!!!";
        break;
    }

    $currentPlayer = $currentPlayer === $playerX ? $playerO : $playerX;


}
