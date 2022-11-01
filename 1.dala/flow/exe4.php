<?php

$days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

$dayNumber = [];
$enteredNumber = readline("Enter the number of day: ");
$dayNumber = $enteredNumber;

switch($dayNumber) {
    case $dayNumber == 1:
        echo $days[0];
        break;
    case $dayNumber == 2:
        echo $days[1];
        break;
    case $dayNumber == 3:
        echo $days[2];
        break;
    case $dayNumber == 4:
        echo $days[3];
        break;
    case $dayNumber == 5:
        echo $days[4];
        break;
    case $dayNumber == 6:
        echo $days[5];
        break;
    case $dayNumber == 7:
        echo $days[6];
        break;
    default:
        echo "Not a valid day";
}
echo PHP_EOL;
