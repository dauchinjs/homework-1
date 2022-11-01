<?php

$firstNumber = [];
$number1 = readline("Input the 1st number: ");
$firstNumber = $number1;
$secondNumber = [];
$number2 = readline("Input the 2nd number: ");
$secondNumber = $number2;
$thirdNumber = [];
$number3 = readline("Input the 3rd number: ");
$thirdNumber = $number3;

echo "Largest number: " . max($firstNumber, $secondNumber, $thirdNumber);
echo PHP_EOL;
