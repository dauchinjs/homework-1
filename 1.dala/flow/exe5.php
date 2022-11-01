<?php

$string = [];
$sentence = readline("Write a sentence: ");
$string = strtolower($sentence);
$string = str_split($string);

for($i = 0; $i < count($string); $i++){
    switch($string[$i]) {
        case $string[$i] == ' ':
            echo '  ';
            break;
        case $string[$i] == 'a':
            echo 2 . ' ';
            break;
        case $string[$i] == "b":
            echo 22 . ' ';
            break;
        case $string[$i] == "c":
            echo 222 . ' ';
            break;
        case $string[$i] == "d":
            echo 3 . ' ';
            break;
        case $string[$i] == "e":
            echo 33 . ' ';
            break;
        case $string[$i] == "f":
            echo 333 . ' ';
            break;
        case $string[$i] == "g":
            echo 4 . ' ';
            break;
        case $string[$i] == 'h':
            echo 44 . ' ';
            break;
        case $string[$i] == 'i':
            echo 444 . ' ';
            break;
        case $string[$i] == 'j':
            echo 5 . ' ';
            break;
        case $string[$i] == 'k':
            echo 55 . ' ';
            break;
        case $string[$i] == 'l':
            echo 555 . ' ';
            break;
        case $string[$i] == 'm':
            echo 6 . ' ';
            break;
        case $string[$i] == 'n':
            echo 66 . ' ';
            break;
        case $string[$i] == 'o':
            echo 666 . ' ';
            break;
        case $string[$i] == 'p':
            echo 7 . ' ';
            break;
        case $string[$i] == 'q':
            echo 77 . ' ';
            break;
        case $string[$i] == 'r':
            echo 777 . ' ';
            break;
        case $string[$i] == 's':
            echo 7777 . ' ';
            break;
        case $string[$i] == 't':
            echo 8 . ' ';
            break;
        case $string[$i] == 'u':
            echo 88 . ' ';
            break;
        case $string[$i] == 'v':
            echo 888 . ' ';
            break;
        case $string[$i] == 'w':
            echo 9 . ' ';
            break;
        case $string[$i] == 'x':
            echo 99 . ' ';
            break;
        case $string[$i] == 'y':
            echo 999 . ' ';
            break;
        case $string[$i] == 'z':
            echo 9999 . ' ';
            break;
        default:
            echo "ERROR";
    }
}
echo PHP_EOL;
