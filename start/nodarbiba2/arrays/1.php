<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

echo "Original numeric array: ";
$numbersLength = count($numbers);
for ($i = 0; $i < $numbersLength; $i++) {
    echo $numbers[$i] . ' ';
}
echo PHP_EOL;

echo "Sorted numeric array: ";
sort($numbers);
for ($i = 0; $i < $numbersLength; $i++) {
    echo $numbers[$i] . ' ';
}
echo PHP_EOL;

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

echo "Original string array: ";
$stringLength = count($words);
for ($i = 0; $i < $stringLength; $i++) {
    echo $words[$i] . ' ';
}
echo PHP_EOL;

echo "Sorted string array: ";
rsort($words);
for ($i = 0; $i < $stringLength; $i++) {
    echo $words[$i] . ' ';
}