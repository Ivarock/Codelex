<?php

$wordOne = readline("Enter the word one: ");
$wordTwo = readline("Enter the word two: ");
$wordOneCount = strlen($wordOne);
$wordTwoCount = strlen($wordTwo);
$dots = '';
for ($i = 1; $i <= 30 - ($wordOneCount + $wordTwoCount); $i++) {
    $dots .= '.';
}
echo $wordOne . $dots . $wordTwo;