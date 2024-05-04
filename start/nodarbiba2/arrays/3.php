<?php


$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$value = readline("Enter the value to search for: ");
$result = array_search($value, $numbers);

if ($result === false) {
    echo "Invalid value";
} else {
    echo "The value you are looking for is located in array under index: " . $result;
}

