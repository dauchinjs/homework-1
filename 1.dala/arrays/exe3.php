<?php

$number = [];
$insertedNumber = readline('Enter the value to search for: ');
$number = $insertedNumber;

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

if(in_array($number, $numbers)) {
    echo "This array contains this number: {$number}";
} else {
    echo "This array doesn't contain this number: {$number}";
}
echo PHP_EOL;