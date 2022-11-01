<?php

//ex1
$numbers = range(0, 10);
foreach ($numbers as $number) {
    echo $number . " ";
}
echo PHP_EOL;
echo "==========================";
echo PHP_EOL;

//ex2
$numbers2 = range(0, 10);
for ($i = 0; $i < count($numbers2); $i++) {
    echo "$i ";
}
echo PHP_EOL;
echo "==========================";
echo PHP_EOL;

//ex3
$x = 1;
while ($x++ < 10) {
    echo "codelex ";
}
echo PHP_EOL;
echo "==========================";
echo PHP_EOL;

//ex4
$numbers3 = range(1, 30);
for ($i = 0; $i < count($numbers3); $i++) {
    if($i % 3 == 0) {
        echo "$i ";
    }
}
echo PHP_EOL;
echo "==========================";
echo PHP_EOL;

//ex5
$people = [
    [
        "name" => "Bob",
        "surname" => "Marley",
        "age" => 36,
        "birthday" => 06.02
    ],
    [
        "name" => "Bob",
        "surname" => "Hartley",
        "age" => 62,
        "birthday" => 07.09
    ],
    [
        "name" => "Bob",
        "surname" => "Ross",
        "age" => 53,
        "birthday" => 29.10
    ]
];
foreach($people as $key => $value) {
    echo "Name: {$value['name']}, Surname: {$value['surname']}, Age: {$value['age']}, Birthday: {$value['birthday'] }";
    echo PHP_EOL;
}


