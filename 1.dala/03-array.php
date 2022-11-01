<?php

//ex1
$values = [10, 20, 30];
echo array_sum($values) . "\n";
echo "==========================";
echo PHP_EOL;

//ex2
$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];
var_dump($person["name"] . " " .  $person["surname"] . " " . $person["age"]);
echo "==========================";
echo PHP_EOL;

//ex3
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;
var_dump($person->name . " " . $person->surname. " " . $person->age);
echo "==========================";
echo PHP_EOL;

//ex4
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
var_dump($items[0][1]['name']. " " . $items[0][1]['surname'] . " " . $items[0][1]['age']);
echo "==========================";
echo PHP_EOL;

//ex5
$items2 = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
var_dump($items2[0][0]['name'] . " & " . $items2[0][1]['name'] . " " .  $items2[0][0]['surname'] . "`s");