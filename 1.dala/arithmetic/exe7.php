<?php

$acceleration = -9.81;
$time = 10;
$initialVelocity = 0;
$initialPosition = 0;

$position = 0.5 * $acceleration * $time**2 + $initialVelocity * $time + $initialPosition;
echo "The value is {$position} meters";
echo PHP_EOL;