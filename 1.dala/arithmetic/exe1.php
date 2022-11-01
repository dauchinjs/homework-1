<?php

//ex1
$firstNumber = [];
$secondNumber = [];
$numberOne = readline('Write first number: ');
$firstNumber = (int) $numberOne;
$numberTwo = readline('Write second number: ');
$secondNumber =(int) $numberTwo;

function integers($firstNumber, $secondNumber) {
    if($firstNumber === 15 || $secondNumber === 15) {
        echo "true";
    } else if ($firstNumber + $secondNumber === 15) {
        echo "true";
    } else if ($firstNumber - $secondNumber === 15 || $secondNumber - $firstNumber === 15) {
        echo "true";
    } else {
        echo "false";
    }
}
integers($firstNumber, $secondNumber);
echo PHP_EOL;