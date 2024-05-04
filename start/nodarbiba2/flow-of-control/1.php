<?php

$numberOne = readline("Input the 1st number: ");
$numberTwo = readline("Input the 2nd number: ");
$numberThree = readline("Input the 3rd number: ");

function largestNumber($numberOne, $numberTwo, $numberThree)
{
    return max($numberOne, $numberTwo, $numberThree);
}
echo largestNumber($numberOne, $numberTwo, $numberThree);