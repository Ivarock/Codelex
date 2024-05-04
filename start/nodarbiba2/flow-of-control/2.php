<?php

$number = readline("Write a number: ");
if (!intval($number)) {
    echo "ERROR! Please enter a positive or negative number.";
    return;
}
if ($number > 0) {
    echo "Your number has a positive value." . PHP_EOL;
} else if ($number < 0) {
    echo "Your number has a negative value." . PHP_EOL;
}