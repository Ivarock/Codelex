<?php

$base = readline("Enter the base number: ");
$exponent = readline("Enter the exponent number: ");

$powerNumber = 1;

for ($i = 1; $i <= $exponent; $i++) {
    $powerNumber *= $base;
}

echo $powerNumber;