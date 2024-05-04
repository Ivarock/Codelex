<?php

$numbers = [];

for ($i = 0; $i <= 9; $i++) {
    array_push($numbers, rand(1, 100));
}

$numbersCopy = $numbers;

$numbers[9] = -7;
echo "Array 1: ";
foreach ($numbers as $number) {
    echo $number . " ";
}
echo PHP_EOL;

echo "Array 2: ";
foreach ($numbersCopy as $number) {
    echo $number . " ";
}