<?php

$weightKg = [];
$insertedWeight = readline('Insert your weight in kg ');
$weightKg = $insertedWeight;
$heightM = [];
$insertedHeight = readline('Insert your height in meters ');
$heightM = $insertedHeight;

$weightToPounds = $weightKg * 2.2;
$heightToInches = $heightM * 39.37;

$bmi = round($weightToPounds * 703 / $heightToInches ** 2, 2);
echo "Your BMI is {$bmi}. ";
if($bmi > 18.5 && $bmi < 25) {
    echo "Your weight is optimal";
} else if ($bmi < 18.5) {
    echo "You are underweight";
} else if ($bmi > 25) {
    echo "You are overweight";
}
echo PHP_EOL;
