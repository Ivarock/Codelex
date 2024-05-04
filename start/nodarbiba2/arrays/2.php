<?php

function calculateAverage ($array) {
    return array_sum($array) / count($array);
}

$numbers = [20, 30, 25, 35, -16, 60, -100];
$average = calculateAverage($numbers);
echo "Average value in array: " . number_format($average, 2);

