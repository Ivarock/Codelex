<?php

// Exercise 1
echo "Exercise 1:\n";

$a = 10;
$b = 5;

if ($a + $b == 15 || abs($a - $b) == 15 || $a == 15 || $b == 15) {
    echo "True";
} else {
    echo "False";
}

echo(PHP_EOL);

// Exercise 2
echo "Exercise 2:\n";

function CheckOddEven($number)
{
    if ($number % 2 == 0) {
        echo "$number is even\n";
    } else {
        echo "$number is not even\n";
    }
}

;
CheckOddEven(2);

echo "Bye!";
echo(PHP_EOL);

// Exercise 3
echo "Exercise 3:\n";

$lowerBound = 1;
$upperBound = 100;
$sum = 0;


for ($i = $lowerBound; $i <= $upperBound; $i++) {
    $sum += $i;
    $avg = $sum / $i;
};

echo "The sum of $lowerBound to $upperBound is $sum \n";
echo "The average is $avg \n";
echo(PHP_EOL);

// Exercise 4
echo "Exercise 4:\n";

function factorial($number)

{
    $product = 1;
    for ($i = 1; $i <= $number; $i++) {
        $product *= $i;
    }
    echo $product;
}

;
factorial(10);
echo(PHP_EOL);

// Exercise 5
echo "Exercise 5:\n";

$myNumber = rand(1, 100);
$guessAmount = 3;
$guessed = false;

while ($guessed == false || $guessAmount > 0) {//

    echo "I am thinking of a number between 1 and 100. Try to guess it.\n";
    $guess = (int)readline("Enter a number: ");


    if (empty($myNumber)) {
        echo "Please enter a valid number";
    }

    if ($guess <= 0 || $guess > 100) {
        echo "Please enter a valid number";
        exit;
    }


    if ($guess < $myNumber) {
        echo "Sorry, you are too low, i was thinking of $myNumber";
    } else if ($guess > $myNumber) {
        echo "Sorry, you are too high. I was thinking of $myNumber";
    } else {
        echo "You guessed it! What are the odds?!?";
    }
    $guessAmount--;
}