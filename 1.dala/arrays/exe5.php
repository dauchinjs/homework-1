<?php

$board = [
    [' ',' ',' '],
    [' ',' ',' '],
    [' ',' ',' '],
];

$combinations = [
    //Horizontal
    [[0, 0], [0, 1], [0, 2]],
    [[1, 0], [1, 1], [1, 2]],
    [[2, 0], [2, 1], [2, 2]],

    //Vertical
    [[0, 0], [1, 0], [2, 0]],
    [[0, 1], [1, 1], [2, 1]],
    [[0, 2], [1, 2], [2, 2]],

    //Diagonal
    [[0, 0], [1, 1], [2, 2]],
    [[0, 2], [1, 1], [2, 0]],
];

function displayBoard(array $board) {

    echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]} \n";
    echo "---+---+---\n";
    echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]} \n";
    echo "---+---+---\n";
    echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]} \n";
}
displayBoard($board);

$playerX = "X";
$playerO = "O";

$currentPlayer = $playerX;

$turns = 0;

while(true) {

    $userChoice = readline("\n '{$currentPlayer}', choose your location (row, column): ");
    [$x, $y] = explode(' ', $userChoice);

    if($x == null || $y == null) {
        displayBoard($board);
        echo "\nInvalid Input.";
        continue;
    }

    if($board[$x][$y] == ' ') {
        $board[$x][$y] = $currentPlayer;
    } else {
        echo "\nCell is already filled. Choose different position.";
        continue;
    }
    displayBoard($board);

    $turns++;

    foreach ($combinations as $combination) {
        $conditionCounter = 0;

        foreach ($combination as $position) {
            [$x, $y] = $position;
            if ($board[$x][$y] !== $currentPlayer) {
                break;
            }
            $conditionCounter++;
        }
        if ($conditionCounter == 3) {
            echo "\nPlayer {$currentPlayer} wins!\n";
            exit;
        }
    }

    if($turns === 9) {
        echo "It's a tie";
        exit;
    }

    $currentPlayer = $currentPlayer === $playerX ? $playerO : $playerX;
}
