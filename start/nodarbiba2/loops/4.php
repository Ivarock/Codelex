<?php

class BuzzFizz
{
    function fizzBuzz()
    {
        $maxValue = readline("Enter the maximum value: ");
        $maxValue = intval($maxValue);
        if ($maxValue < 1) {
            echo "Please enter a positive integer. \n";
            return;
        }
        $line = 0;
        for ($i = 1; $i <= $maxValue; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz" . ' ';
            } else if ($i % 3 == 0) {
                echo "Fizz" . ' ';
            } else if ($i % 5 == 0) {
                echo "Buzz" . ' ';
            } else {
                echo $i . ' ';
            }
            $line++;
            if ($line % 20 == 0) {
                echo "\n";
            }
        }
        echo PHP_EOL;
    }
}

$run = new BuzzFizz();
$run->fizzBuzz();