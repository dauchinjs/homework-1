<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];
$average = round(array_sum($numbers) / count($numbers), 2);
echo $average;
echo PHP_EOL;