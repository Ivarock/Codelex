<?php

// Exercise 1
echo "Exercise 1:\n";

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbers as $number) {
    echo $number . "\n";
}
echo "\n";

// Exercise 2
echo "Exercise 2:\n";

$numbers2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = 0; $i < count($numbers2); $i++) {
    echo $numbers2[$i] . "\n";
}
echo "\n";

// Exercise 3
echo "Exercise 3:\n";

$x = 1;

while ($x < 10) {
    echo "codelex\n";
    $x++;
}
echo "\n";

// Exercise 4
echo "Exercise 4:\n";

$numbers3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($numbers3 as $number) {
    if ($number % 3 === 0) {
        echo $number . "\n";
    }
}
echo "\n";

// Exercise 5

echo "Exercise 5:\n";

$human1 = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50,
    "birthday" => "11-06-1973"
];

$human2 = [
    "name" => "Fred",
    "surname" => "Flintstone",
    "age" => 34,
    "birthday" => "01-01-1990"
];

$human3 = [
    "name" => "Ivars",
    "surname" => "Sluka",
    "age" => 32,
    "birthday" => "12-07-1991"
];

$humans = [
    "human1" => $human1,
    "human2" => $human2,
    "human3" => $human3
];

foreach ($humans as $human) {
    $personalData = $human["name"] . " " . $human["surname"] . " " . $human["age"] . " " . $human["birthday"];
    echo $personalData . "\n";
}