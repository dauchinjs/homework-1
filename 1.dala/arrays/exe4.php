<?php

$numbers = range(1, 100);
shuffle($numbers);
for($i = 0; $i < 10; $i++) {
    if($i != 9) {
        echo $numbers [$i] . ' ';
    } else {
        echo -7;
    }
}
echo PHP_EOL;

$numbersCopy = [];
for($i = 0; $i < 10; $i++) {
    $numbersCopy[$i] = $numbers[$i];
    echo $numbersCopy[$i] . ' ';
}
echo PHP_EOL;