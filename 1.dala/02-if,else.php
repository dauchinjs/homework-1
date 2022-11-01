<?php

//ex1
$number = 10;
$numberAsString = "10";

if($number == $numberAsString) {
    echo "true";
}
echo PHP_EOL;
echo "==========================";
echo PHP_EOL;

//ex2
function integer($number) {
    if($number > 1 && $number < 100) {
        echo "true";
    } else {
        echo "false";
    }
}
echo integer(50) . "\n";

//$number = 50;
//if($number > 1 && $number < 100) {
//    echo "true";
//} else {
//    echo "false";
//}
//echo PHP_EOL;
echo "==========================";
echo PHP_EOL;

//ex3
function word($string) {
    if($string == "hello") {
        echo "world";
    } else {
        echo "null";
    }
}
echo word("hello") . "\n";

//$word = "hello";
//if($word == "hello") {
//    echo "world";
//} else {
//    echo "null";
//}
//echo PHP_EOL;
echo "==========================";
echo PHP_EOL;

//ex4
function value($number) {
    if($number > 0 && $number < 100 && $number % 2 == 0) {
        echo "It's an even number";
    } else if($number > 0 && $number < 100 && $number % 2 != 0) {
        echo "It's an odd number";
    } else {
        echo "Invalid number";
    }
}
echo value(4) . "\n";

//$value = 4;
//if($value > 0 && $value < 100 && $value % 2 == 0) {
//    echo "It's an even number";
//} else if($value > 0 && $value < 100 && $value % 2 != 0) {
//    echo "It's an odd number";
//} else {
//    echo "Invalid number";
//}
//echo PHP_EOL;
echo "==========================";
echo PHP_EOL;

//ex5
$variable = 50;
$y = 1;
$z = 100;
if($variable > $y && $variable < $z) {
    echo "correct";
} else {
    echo "incorrect";
}
echo PHP_EOL;
echo "==========================";
echo PHP_EOL;

//ex6
$plateNumber = "JD-823";
switch($plateNumber) {
    case "JD-823":
        echo "This is your car";
        break;
    default:
        echo "This is not your car";
}
echo PHP_EOL;
echo "==========================";
echo PHP_EOL;

//ex7
function number($integer) {
    switch($integer) {
        case $integer < 50:
        echo "low";
        break;
    case $integer > 50 && $integer < 100:
        echo "medium";
        break;
    case $integer > 100:
        echo "high";
        break;
    default:
        echo "Number not valid";
    }
}
echo number(38) . "\n";
echo "==========================";
echo PHP_EOL;

//$newNumber = 38;
//switch($newNumber) {
//    case $newNumber < 50:
//        echo "low";
//        break;
//    case $newNumber > 50 && $newNumber < 100:
//        echo "medium";
//        break;
//    case $newNumber > 100:
//        echo "high";
//        break;
//    default:
//        echo "Number not valid";
//}
//echo PHP_EOL;
