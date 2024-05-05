<?php

function getRandomWord($words) {
    $index = rand(0, count($words) -1);
    return $words[$index];
}

$words = [
    'codelex',
    'programming',
    'coding',
    'typescript'
];

$word = getRandomWord($words);
$wordParts = str_split($word);
$targetWord = str_split(str_repeat('_', strlen($word)));
$guesses = 0;
$maxGuesses = strlen($word) + 3;

echo implode(' ', $targetWord) . PHP_EOL;
while ($guesses < $maxGuesses) {
    $letter = readline("Please enter a letter: ");
    $letterPosition = array_search($letter, $wordParts);

    if ($letterPosition !== false) {
        $targetWord[$letterPosition] = $letter;
        $wordParts[$letterPosition] = '-';

        if (implode('', $targetWord) === $word) {
            echo "Correct! The word was: " . $word . PHP_EOL;
            echo implode(' ', $targetWord) . PHP_EOL;
            break;
        }
    }
    $guesses++;
    echo implode(' ', $targetWord) . PHP_EOL;
}
if (implode('', $targetWord) !== $word) {
    echo "Wrong! The word was: " . $word . PHP_EOL;
}