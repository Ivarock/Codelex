<?php

function charToDigit($char)
{
    $char = strtoupper($char);

    if ($char == 'A') {
        return '2 ';
    } else if ($char == 'B') {
        return '22 ';
    } else if ($char == 'C') {
        return '222 ';
    } else if ($char == 'D') {
        return '3 ';
    } else if ($char == 'E') {
        return '33 ';
    } else if ($char == 'F') {
        return '333 ';
    } else if ($char == 'G') {
        return '4 ';
    } else if ($char == 'H') {
        return '44 ';
    } else if ($char == 'I') {
        return '444 ';
    } else if ($char == 'J') {
        return '5 ';
    } else if ($char == 'K') {
        return '55 ';
    } else if ($char == 'L') {
        return '555 ';
    } else if ($char == 'M') {
        return '6 ';
    } else if ($char == 'N') {
        return '66 ';
    } else if ($char == 'O') {
        return '666 ';
    } else if ($char == 'P') {
        return '7 ';
    } else if ($char == 'Q') {
        return '77 ';
    } else if ($char == 'R') {
        return '777 ';
    } else if ($char == 'S') {
        return '7777 ';
    } else if ($char == 'T') {
        return '8 ';
    } else if ($char == 'U') {
        return '88 ';
    } else if ($char == 'V') {
        return '888 ';
    } else if ($char == 'W') {
        return '9 ';
    } else if ($char == 'X') {
        return '99 ';
    } else if ($char == 'Y') {
        return '999 ';
    } else if ($char == 'Z') {
        return '9999 ';
    } else if ($char == ' ') {
        return '0 ';
    } else {
        return '';
    }


//    switch ($char) {
//        case 'A':
//            return '2 ';
//        case 'B':
//            return '22 ';
//        case 'C':
//            return '222 ';
//        case 'D':
//            return '3 ';
//        case 'E':
//            return '33 ';
//        case 'F':
//            return '333 ';
//        case 'G':
//            return '4 ';
//        case 'H':
//            return '44 ';
//        case 'I':
//            return '444 ';
//        case 'J':
//            return '5 ';
//        case 'K':
//            return '55 ';
//        case 'L':
//            return '555 ';
//        case 'M':
//            return '6 ';
//        case 'N':
//            return '66 ';
//        case 'O':
//            return '666 ';
//        case 'P':
//            return '7 ';
//        case 'Q':
//            return '77 ';
//        case 'R':
//            return '777 ';
//        case 'S':
//            return '7777 ';
//        case 'T':
//            return '8 ';
//        case 'U':
//            return '88 ';
//        case 'V':
//            return '888 ';
//        case 'W':
//            return '9 ';
//        case 'X':
//            return '99 ';
//        case 'Y':
//            return '999 ';
//        case 'Z':
//            return '9999 ';
//        case ' ':
//            return '0 ';
//        default:
//            return '';
//    }
}

function translate($input)
{
    $result = '';
    for ($i = 0; $i < strlen($input); $i++) {
        $result .= charToDigit($input[$i]);
    }
    return $result;
}

$input = readline("Enter input text: ");
$keyDigits = translate($input);
echo "Keypad digits for text: " . $keyDigits . PHP_EOL;