<?php

$guessingNumber = rand(1, 100);
$guess = [];
$guessedNumber = readline("I'm thinking of a number between 1-100. Try to guess it. ");
$guess = $guessedNumber;

if($guess > $guessingNumber) {
    echo "Sorry, you are too high. I was thinking of {$guessingNumber}";
} else if ($guess < $guessingNumber) {
    echo "Sorry, you are too low. I was thinking of {$guessingNumber}";
} else {
    echo "You guessed it! What are the odds?!?";
}
echo PHP_EOL;