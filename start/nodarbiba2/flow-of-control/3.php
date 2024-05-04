<?php

$positiveInteger = readline("Write a positive number: ");
if ($positiveInteger <= 0) {
echo "ERROR! Please enter a positive number.";
return;
}
$digitsCount = strlen($positiveInteger);
echo "The amount of digits in your number is: " . $digitsCount . PHP_EOL;