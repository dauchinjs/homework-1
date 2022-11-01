<?php

$number = [];
$enteredNumb = readline("Enter the number: ");
$number = $enteredNumb;

if($number <= 0) {
    exit;
}

$digitAmount = strlen($number);

echo "This number has {$digitAmount} digits";
echo PHP_EOL;