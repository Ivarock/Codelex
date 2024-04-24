<?php

// Exercise 1
echo "Exercise 1:\n";

$items = [5, 6, 7];
echo $items[0] + $items[1] + $items[2];

echo "\n";

// Exercise 2
echo "Exercise 2:\n";

$human = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];

var_dump($human);

echo "\n";

// Exercise 3
echo "Exercise 3:\n";

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;

var_dump($person->name, $person->surname, $person->age);

echo "\n";

// Exercise 4
echo "Exercise 4:\n";

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo $items[0][1]['name'] . ' ' . $items[0][1]['surname'] . ' ' . $items[0][1]['age'];
echo "\n";

// Exercise 5
echo "Exercise 5:\n";


$people = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];


echo $people[0][0]['name'] . ' & ' . $people[0][1]['name'] . " Doe's";