<?php

$words = [
    'codelex',
    'home',
    'navigation',
    'leviathan',
    'orange',
    'fruit'
];

$guessingWord = $words[rand(0, count($words))];
$letters = str_split($guessingWord);
$correctWord = str_split(str_repeat('-', strlen($guessingWord)));

echo implode('', $correctWord);
echo PHP_EOL;

$guesses = 0;
$maxGuesses = strlen($guessingWord) + 5;
$misses = [];

while ($guesses < $maxGuesses && in_array('-', $correctWord)) {

    echo "Misses: " . implode(', ', $misses);
    echo PHP_EOL;

    $selection = readline('Guess a letter: ');
    $letterPositions = array_keys($letters, $selection);

    if($letterPositions == null) {
        $misses[] = $selection;
    } else{
        foreach($letterPositions as $position) {
            $correctWord[$position] = $selection;
        }
    }


    echo implode('', $correctWord);
    echo PHP_EOL;

    echo "=================================";
    echo PHP_EOL;

    $guesses++;

}



if(in_array('-', $correctWord)) {
    echo "You lose.";
} else {
    echo "You win";
}
echo PHP_EOL;
