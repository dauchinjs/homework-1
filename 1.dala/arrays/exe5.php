<?php

error_reporting(E_ALL & ~E_NOTICE); //lai terminaalis tiirs

$board = [
    [[], [], []],
    [[], [], []],
    [[], [], []]
];      //masiivs -> board
$cells = $board[0];     //vieglaakaa veidaa display_board

$turns = 0;
$maxTurns = 9;
$turnDone = null;

function display_board() {
    global $cells;

    echo "==================== \n";
    echo " {$cells[0][0]}  | {$cells[0][1]} | {$cells[0][2]} \n";
    echo "---+---+---\n";
    echo " {$cells[1][0]}  | {$cells[1][1]} | {$cells[1][2]} \n";
    echo "---+---+---\n";
    echo " {$cells[2][0]}  | {$cells[2][1]} | {$cells[2][2]} \n";
}

function playerX() {
    global $cells, $turns, $turnDone;
    do {
        $turnDone = false;
        $X = readline("Player X, choose your spot (row, column): ");
        $X = str_replace(' ', '', $X);
        $X = str_split($X);

        if(in_array("-", $X) || ($X[0]) > 2 || $X[1] > 2) {     //ja inputs "-" vai <2 tad neder
            echo "Invalid input. Choose between value 0-2";
            echo PHP_EOL;
        } else if($cells[$X[0]][$X[1]] !== null) {          //ja vieta aiznemta
            echo "This spot is occupied";
            echo PHP_EOL;
        } else {
            $cells[$X[0]][$X[1]] = 'X';
            $turnDone = true;
        }
    } while($turnDone === false);
    $turns++;
}

function playerO() {
    global $cells, $turns, $turnDone;
    do {
        $turnDone = false;
        $O = readline("Player O, choose your spot (row, column): ");
        $O = str_replace(' ', '', $O);
        $O = str_split($O);

        if(in_array("-", $O) || ($O[0]) > 2 || $O[1] > 2) {     //ja inputs "-" vai <2 tad neder
            echo "Invalid input. Choose value between 0-2";
            echo PHP_EOL;
        } else if($cells[$O[0]][$O[1]] !== null) {          //ja vieta aiznemta
            echo "This spot is occupied";
            echo PHP_EOL;
        } else {
            $cells[$O[0]][$O[1]] = 'O';
            $turnDone = true;
        }
    } while($turnDone === false);
    $turns++;
}

function winner() {
    global $cells, $turns, $maxTurns;

    // rows X
    if ($cells[0][0] === 'X' && $cells[0][1] === 'X' && $cells[0][2] === 'X') {
        echo "Player X has won";
        echo PHP_EOL;
        exit;
    } else if ($cells[1][0] === 'X' && $cells[1][1] === 'X' && $cells[1][2] === 'X') {
        echo "Player X has won";
        echo PHP_EOL;
        exit;
    } else if ($cells[2][0] === 'X' && $cells[2][1] === 'X' && $cells[2][2] === 'X') {
        echo "Player X has won";
        echo PHP_EOL;
        exit;
    }

    // columns X
    else if ($cells[0][0] === 'X' && $cells[1][0] === 'X' && $cells[2][0] === 'X') {
        echo "Player X has won";
        echo PHP_EOL;
        exit;
    } else if ($cells[0][1] === 'X' && $cells[1][1] === 'X' && $cells[2][1] === 'X') {
        echo "Player X has won";
        echo PHP_EOL;
        exit;
    } else if ($cells[0][2] === 'X' && $cells[1][2] === 'X' && $cells[2][2] === 'X') {
        echo "'X' won";
        echo PHP_EOL;
        exit;
    }

    // diagonals X
    else if ($cells[0][0] === 'X' && $cells[1][1] === 'X' && $cells[2][2] === 'X') {
        echo "Player X has won";
        echo PHP_EOL;
        exit;
    } else if ($cells[0][2] === 'X' && $cells[1][1] === 'X' && $cells[2][0] === 'X') {
        echo "Player X has won";
        echo PHP_EOL;
        exit;
    }


    // rows O
    else if ($cells[0][0] === 'O' && $cells[0][1] === 'O' && $cells[0][2] === 'O') {
        echo "Player O has won";
        echo PHP_EOL;
        exit;
    } else if ($cells[1][0] === 'O' && $cells[1][1] === 'O' && $cells[1][2] === 'O') {
        echo "Player O has won";
        echo PHP_EOL;
        exit;
    } else if ($cells[2][0] === 'O' && $cells[2][1] === 'O' && $cells[2][2] === 'O') {
        echo "Player O has won";
        echo PHP_EOL;
        exit;
    }

    //columns O
    else if ($cells[0][0] === 'O' && $cells[1][0] === 'O' && $cells[2][0] === 'O') {
        echo "Player O has won";
        echo PHP_EOL;
        exit;
    } else if ($cells[0][1] === 'O' && $cells[1][1] === 'O' && $cells[2][1] === 'O') {
        echo "Player O has won";
        echo PHP_EOL;
        exit;
    } else if ($cells[0][2] === 'O' && $cells[1][2] === 'O' && $cells[2][2] === 'O') {
        echo "Player O has won";
        echo PHP_EOL;
        exit;
    }

    //diagonals O
    else if ($cells[0][0] === 'O' && $cells[1][1] === 'O' && $cells[2][2] === 'O') {
        echo "Player O has won";
        echo PHP_EOL;
        exit;
    } else if ($cells[0][2] === 'O' && $cells[1][1] === 'O' && $cells[2][0] === 'O') {
        echo "'Player O has won";
        echo PHP_EOL;
        exit;
    }

    if ($turns === $maxTurns) {
        echo "It's a tie";
        echo PHP_EOL;
        exit;
    }
}

function playGame() {
    display_board();
    playerX();
    display_board();
    winner();
    playerO();
    display_board();
    winner();
}

while($turns <= $maxTurns) {
    playGame();
}
