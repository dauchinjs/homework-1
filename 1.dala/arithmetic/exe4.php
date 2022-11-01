<?php

$factorialNumber = [];
$insertedNumber = readline('Enter number to calculate factorial value: ');
$factorialNumber = $insertedNumber;
$startNumber = 1;
$numbersMultiplied = array_product(range($startNumber, $factorialNumber));
echo $numbersMultiplied;
echo PHP_EOL;

//$startNumber = [];
//$endNumber = [];
//$numberOne = readline('Enter the start number: ');
//$startNumber = (int) $numberOne;
//$numberTwo = readline('Enter the end number: ');
//$endNumber = (int) $numberTwo;
//
//$numbersMultiplied = array_product(range($startNumber, $endNumber));
//echo $numbersMultiplied;
//echo PHP_EOL;