<?php

$number = [];
$newNumber = readline('Insert a number: ');
$number = (int) $newNumber;

if($number % 2 === 0) {
    echo "Even Number";
} else {
    echo "Odd Number";
}
echo PHP_EOL;
echo "bye!";
echo PHP_EOL;