<?php

$numbers = range(1, 110);


function cozaLozaWoza($numbers) {
    for($i = 1; $i <= count($numbers); $i++) {
        if ($i % 3 === 0 && $i % 11 === 0) {
            echo str_replace($numbers, $i, "Coza") . " ";
            echo PHP_EOL;
        } else if ($i % 5 === 0 && $i % 11 === 0) {
            echo str_replace($numbers, $i, "Loza") . " ";
            echo PHP_EOL;
        } else if ($i % 7 === 0 && $i % 11 === 0) {
            echo str_replace($numbers, $i, "Woza") . " ";
            echo PHP_EOL;
        } else if ($i % 11 === 0) {
            echo $i . " ";
            echo PHP_EOL;
        } else if ($i % 3 === 0 && $i % 5 === 0) {
            echo str_replace($numbers, $i, "CozaLoza") . " ";
        } else if ($i % 3 === 0 && $i % 7 === 0) {
            echo str_replace($numbers, $i, "CozaWoza"). " ";
        } else if ($i % 5 === 0 && $i % 7 === 0) {
            echo str_replace($numbers, $i, "LozaWoza"). " ";
        } else if($i % 3 === 0) {
            echo str_replace($numbers, $i, "Coza"). " ";
        } else if ($i % 5 === 0) {
            echo str_replace($numbers, $i, "Loza") . " ";
        } else if ($i % 7 === 0) {
            echo str_replace($numbers, $i, "Woza") . " ";
        } else {
            echo $i . " ";
        }
    }
}
cozaLozaWoza($numbers);