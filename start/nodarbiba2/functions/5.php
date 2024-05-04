<?php

$fruits = [
    ["fruit" => "Banana", "weight" => 5],
    ["fruit" => "Apple", "weight" => 10],
    ["fruit" => "Orange", "weight" => 15]
];

$shippingCost = [
    "over" => 2,
    "under" => 1
];

function getShippingCost($fruits, $shippingCost): string
{
    $result = '';
    foreach ($fruits as $fruit) {
        if ($fruit["weight"] > 10) {
            $result .= $fruit['fruit'] . " weighs more than 10kg. Shipping cost: €" . $shippingCost['over'] . "\n";
        } else {
            $result .= $fruit['fruit'] . " weighs less than 10kg. Shipping cost: €" . $shippingCost['under'] . "\n";
        }
    }
    return $result;
}


echo getShippingCost($fruits, $shippingCost);