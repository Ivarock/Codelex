<?php

// Exercise 1
echo "Exercise 1: ";

$integer = 10;
$float = 10.10;
$string = 'Hello world!';

echo($integer . ' ' . number_format($float, 2) . ' ' . $string);

echo(PHP_EOL);

// Exercise 2
echo "Exercise 2: ";

$types = [
    $integer = 10,
    $float = 10.10,
    $string = 'Hello world!'
];

var_dump($types);

echo(PHP_EOL);

// Exercise 3
echo "Exercise 3: ";

$name = 'Ivars';
$surname = 'Sluka';
$age = 31;

echo($name . ' ' . $surname . ' ' . $age);