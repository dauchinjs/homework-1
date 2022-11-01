<?php

//ex1
function studentName($sName) {
    echo "$sName codelex";
}
studentName("David");
echo PHP_EOL;
echo "===================================";
echo PHP_EOL;

//ex2
function multiply($number, $multiplier) {
    return $number * $multiplier;
}
echo multiply(10, 5);
echo PHP_EOL;
echo "===================================";
echo PHP_EOL;

//ex3
$people = [
    [
        "name" => "John",
        "surname" => "Doe",
        "age" => 16
    ],
    [
        "name" => "Bob",
        "surname" => "Hartley",
        "age" => 62
    ],
    [
        "name" => "Bob",
        "surname" => "Ross",
        "age" => 53
    ]
];
function adult($people) {
    for($i = 0; $i < count($people); $i++) {
            if($people[$i]['age'] >= 18) {
                echo "{$people[$i]['name']} {$people[$i]['surname']}, age {$people[$i]['age']}. This person has reached the age of 18";
            } else {
                echo "{$people[$i]['name']} {$people[$i]['surname']}, age {$people[$i]['age']}. This person has not reached the age of 18";
            }
            echo PHP_EOL;
    }
}
adult($people);
echo "===================================";
echo PHP_EOL;


//ex4
$person = [
    [
        "name" => "John",
        "surname" => "Doe",
        "age" => 16
    ],
    [
        "name" => "Bob",
        "surname" => "Hartley",
        "age" => 62
    ],
    [
        "name" => "Bob",
        "surname" => "Ross",
        "age" => 53
    ]
];
foreach($person as $key => $value) {
    echo "{$value['name']} {$value['surname']}, age: {$value['age']}";
    echo PHP_EOL;
    if($value['age'] <= 18) {
        echo "This person has not reached the age of 18";
    } else {
        echo "This person has reached the age of 18";
    }
    echo PHP_EOL;
}
echo "===================================";
echo PHP_EOL;


//ex5
$fruits = [
    [
        "fruit" => "Bananas",
        "weight" => 5
    ],
    [
        "fruit" => "Apples",
        "weight" => 12
    ],
    [
        "fruit" => "Oranges",
        "weight" => 15
    ]
];

$cost = [
    "over10kg" => 2,
    "under10kg" => 1
];

function weight($fruits, $cost) {
    foreach($fruits as $value) {
        if($value['weight'] < 10) {
            echo "{$value['fruit']} weight is {$value['weight']} and it is under 10kg. It costs {$cost['under10kg']} eur";
        } else {
            echo "{$value['fruit']} weight is {$value['weight']} and it is over 10kg. It costs {$cost['over10kg']} eur";
        }
        echo PHP_EOL;
    }
}
weight($fruits, $cost);
echo "===================================";
echo PHP_EOL;

//ex6
$elements = [6, 8, 7, 3.8, "mouse"];

function doubled($elements) {
    foreach($elements as $double) {
        if(is_int($double)) {
            echo "Doubled integers: " . $double * 2 . "\n";
        } else {
            echo "Not integers: " . $double . "\n";
        }
    }
}
echo "Array count: " . count($elements) . doubled($elements) . "\n";
echo "===================================";
echo PHP_EOL;

//ex7
$person = new stdClass();
$person->name = "Bob";
$person->licenses = ['A', 'B', 'C'];
$person->money = 200;

function createWeapon($name, $license, $price) {
    $weapon = new stdClass();
    $weapon->name = $name;
    $weapon->license = $license;
    $weapon->price = $price;
    return $weapon;
}

$weapons = [
    createWeapon('Pistol', 'A', 100),
    createWeapon('AK-47', 'C', 250),
    createWeapon('knife', 'B', 50),
];

$licensesText = implode(',', $person->licenses);
echo "Welcome, {$person->name} ({$person->money}$) Licenses:[{$licensesText}]";
echo PHP_EOL;

foreach($weapons as $key => $weapon) {
    echo "[{$key}]{$weapon->name} ({$weapon->price}$) [{$weapon->license}]";
    echo PHP_EOL;
}

$selection = (int) readline('Enter weapon to purchase: ');
$selectedWeapon = $weapons[$selection];

if($selectedWeapon === null) {
    echo "Invalid selection.";
    exit;
}

if($person->money < $selectedWeapon->price) {
    echo "Earn more money";
    echo PHP_EOL;
    exit;
}

if(! in_array($selectedWeapon->license, $person->licenses)) {
    echo "Invalid license";
    exit;
}

$person->money = $selectedWeapon->price;
echo "Thank you for purchasing {$selectedWeapon->name}";
echo PHP_EOL;