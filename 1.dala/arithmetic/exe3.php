<?php

$lowerBound = [];
$upperBound = [];
$lowestNumber = readline('Write the start number: ');
$lowerBound = (int) $lowestNumber;
$highestNumber = readline('Write the end number: ');
$upperBound = (int) $highestNumber;

$numberSum = array_sum(range($lowerBound, $upperBound));
$average = array_sum(range($lowerBound, $upperBound)) / count(range($lowerBound, $upperBound));

echo "The sum of {$lowerBound} to {$upperBound} is {$numberSum}";
echo PHP_EOL;
echo "The average is {$average}";
echo PHP_EOL;