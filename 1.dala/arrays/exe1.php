<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

$newNumbers = implode(" ", $numbers);

echo "Original numeric array: {$newNumbers}";
echo PHP_EOL;

sort($numbers);
echo "Sorted numeric array: ";
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}
echo PHP_EOL;


$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

$newWords = implode(" ", $words);

echo "Original string array: {$newWords} ";
echo PHP_EOL;

$cleanWords = str_replace("#", " ", $newWords);
$cleanerWords = str_replace("+", " ", $cleanWords);


sort($words);
echo "Sorted string array: ";
for($j = 0; $j < count($words); $j++) {
    echo $words[$j] . " ";
}
echo PHP_EOL;