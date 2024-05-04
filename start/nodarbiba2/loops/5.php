<?php

echo "Welcome to Piglet!" . PHP_EOL;

$score = 0;
$playAgain = true;

while ($playAgain) {
    $rollDice = rand(1, 6);

    if ($rollDice == 1) {
        echo "You rolled a " . $rollDice . " Game over! Total score: 0" .PHP_EOL;
        break;
    } else {
        $score += $rollDice;
        echo "You rolled a " . $rollDice . PHP_EOL . "Your total score is: " . $score . PHP_EOL;
    }
    $response = strtolower(readline("Roll again? (yes/no): "));
    if ($response == 'yes' || $response == 'y') {
        $playAgain = true;
    } else {
        $playAgain = false;
        echo "Your final score is: " . $score . PHP_EOL;
    }
}

echo "Thank you for playing";