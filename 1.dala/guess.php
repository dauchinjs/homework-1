<?php

$allWords = [
    'codelex',
    'home',
    'navigation',
    'banana',
];

$guessingWord = $allWords[rand(0, count($allWords))];
$letters = str_split($guessingWord);
$correctWord = str_split(str_repeat('-', strlen($guessingWord)));

echo implode(' ', $correctWord);
echo PHP_EOL;

$guesses = 0;
$maxGuesses = strlen($guessingWord) + 3;
$guessesLeft = ($maxGuesses - $guesses);
while ($guesses < $maxGuesses && in_array('-', $correctWord)) {
    $selection = readline('Guess a letter: ');
    $letterPositions = array_keys($letters, $selection);

    if(count($letterPositions) > 0) {
        foreach($letterPositions as $position) {
            $correctWord[$position] = $selection;
        }
    }
    echo implode('', $correctWord);
    echo PHP_EOL;

    $guesses++;
}

if(in_array('-', $correctWord)) {
    echo "You lose.";
} else {
    echo "You win";
}
echo PHP_EOL;