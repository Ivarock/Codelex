<?php

//BMI = weight(lbs) * 703 / height(in)^2;

$weight = readline("Enter your weight in kg: ");
$height = readline("Enter your height in cm: ");

$BMI = ($weight * 2.20462) * 703 / (($height / 2.54) * ($height / 2.54));

if ($BMI < 18.5) {
echo "Your BMI is " . number_format($BMI, 2) . " You are underweight";
} else if ($BMI >= 18.5 && $BMI <= 25) {
echo "Your BMI is " . number_format($BMI, 2) . " You are in optimal shape";
} else {
echo "Your BMI is " . number_format($BMI, 2) . " You are overweight";
}