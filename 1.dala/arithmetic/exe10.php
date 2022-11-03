<?php

function error() {
    $insertedNumbers = func_num_args();
    for($i = 0; $i < $insertedNumbers; $i++) { //paarbauda vai tiks ievadiits negatiivs skaitlis turpinajumaa
        $integer = func_get_arg($i);
        if($integer < 0) {
            echo "ERROR";
        }
    }
}

class Geometry {
    public $radius;
    public $rectangleWidth;
    public $rectangleHeight;
    public $triangleBase;
    public $triangleHeight;

    public static function circleArea($radius) {
        error($radius);     // error izsauc ieprieksh rakstiito paarbaudi
        return pi() * $radius * 2;
    }

    public static function rectangleArea($rectangleHeight, $rectangleWidth) {
        error($rectangleHeight, $rectangleWidth);
        return $rectangleHeight * $rectangleWidth;
    }

    public static function triangleArea($triangleBase, $triangleHeight) {
        error($triangleBase, $triangleHeight);
        return $triangleBase * $triangleHeight * 0.5;
    }
}

echo "Geometry calculator: ";
echo PHP_EOL . PHP_EOL;

echo "1. Calculate the Area of a Circle";
echo PHP_EOL;
echo "2. Calculate the Area of a Rectangle";
echo PHP_EOL;
echo "3. Calculate the Area of a Triangle";
echo PHP_EOL;
echo "4. Quit";
echo PHP_EOL;

$input = readline("Enter your choice (1-4): ");

if($input == 1) {
    $circle = new Geometry();
    $circle->radius = (int) readline("Enter circle radius: ");
    echo "Area of circle: " . $circle->circleArea($circle->radius);
    echo PHP_EOL;
} else if($input == 2) {
    $rectangle = new Geometry();
    $rectangle->rectangleWidth = (int) readline("Enter rectangle width: ");
    $rectangle->rectangleHeight = (int) readline ("Enter rectangle height: ");
    echo "Area of rectangle: " . $rectangle->rectangleArea($rectangle->rectangleWidth, $rectangle->rectangleHeight);
    echo PHP_EOL;
}else if($input == 3) {
    $triangle = new Geometry();
    $triangle->triangleBase = (int) readline("Enter triangle base: ");
    $triangle->triangleHeight = (int) readline("Enter triangle height: ");
    echo "Area of triangle: " . $triangle->triangleArea($triangle->triangleBase, $triangle->triangleHeight);
    echo PHP_EOL;
} else if ($input == 4) {
    exit;
} else {
    echo "Invalid input";
    echo PHP_EOL;
}
