<?php

// Exercise 1
echo "Exercise 1: ";

$integer = 10;
$string = '10';

if ($integer == $string) {
    echo 'Same';
} else {
    echo 'Not same';
}

echo(PHP_EOL);

// Exercise 2
echo "Exercise 2: ";

$number0 = 50;

if ($number0 > 1 && $number0 < 100) {
    echo($number0 . ' is in the range of 1 and 100');
} else {
    echo($number0 . ' is out of the range of 1 and 100');
}

echo(PHP_EOL);

// Exercise 3
echo "Exercise 3: ";

$greeting = 'Hello';

if ($greeting == 'Hello') {
    echo($greeting . ', World!');
} else {
    echo($greeting);
}

echo(PHP_EOL);

// Ecercise 4
echo "Exercise 4: ";

$number1 = 10;
if ($number1 > 10) {
    echo($number1 . ' is bigger than 10');
} else if ($number1 % 2 != 0) {
    echo($number1 . ' is odd');
} else if ($number1 % 2 == 0) {
    echo($number1 . ' is even');
}

echo(PHP_EOL);

// Exercise 5
echo "Exercise 5: ";

$number2 = 50;
$y = 1;
$z = 100;

if ($number2 >= $y && $number2 <= $z) {
    echo('Number ' . $number2 . ' is in the range of ' . $y . ' and ' . $z);
} else {
    echo('Number ' . $number2 . ' is not in the range of ' . $y . ' and ' . $z);
}

echo(PHP_EOL);

// Exercise 6
echo "Exercise 6: ";

$regPlate = 'LV 2107';

switch ($regPlate) {
    case 'LV 2107':
        echo "Your car reg is " . $regPlate;
        break;

    default:
        echo "This is not your car.";
}

echo(PHP_EOL);

// Exercise 7
echo "Exercise 7: ";

$number3 = 708;

switch ($number3) {
    case $number3 <= 50 :
        echo 'low';
        break;

    case $number3 >= 50 && $number3 <= 100 :
        echo 'medium';
        break;

    case $number3 >= 100 :
        echo 'high';
}