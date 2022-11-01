<?php

$number = [];
$enteredNumb = readline("Enter the number. ");
$number = $enteredNumb;

if($number < 0) {
    echo "Number is negative";
} else if ($number > 0) {
    echo "Number is positive";
} else {
    echo "Number is neither positive nor negative";
}
echo PHP_EOL;