<?php

class RollTwoDice
{
    public function rollDice($desiredSum)
    {

        $rollCounter = 0;
        do {
            $diceOne = rand(1, 6);
            $diceTwo = rand(1, 6);
            $sum = $diceOne + $diceTwo;

            echo "Dice rolled: $diceOne and $diceTwo (Sum: $sum)" . PHP_EOL;
            $rollCounter++;
        } while ($sum !== $desiredSum);
        echo "Desired sum rolled after $rollCounter roll(s)" . PHP_EOL;
    }
}

$desiredSum = (int)readline("Please enter your desired sum: ");
if ($desiredSum < 2 || $desiredSum > 12) {
    echo "Error! Enter a number between 2 and 12.";
}

$game = new RollTwoDice();
$game->rollDice($desiredSum);


echo "Thank you for playing";
