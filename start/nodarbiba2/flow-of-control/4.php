<?php

$dayNumber = readline("Please enter a number from 0 to 6: ");

//switch ($dayNumber) {
//    case 0:
//        echo "The day is Sunday";
//        break;
//    case 1:
//        echo "The day is Monday";
//        break;
//    case 2:
//        echo "The day is Tuesday";
//        break;
//    case 3:
//        echo "The day is Wednesday";
//        break;
//    case 4:
//        echo "The day is Thursday";
//        break;
//    case 5:
//        echo "The day is Friday";
//        break;
//    case 6:
//        echo "The day is Saturday";
//        break;
//    default:
//        echo "Not a valid day!";
//}

if ($dayNumber < 0 || $dayNumber > 6) {
    echo "Not a valid day!";
} elseif ($dayNumber == 0) {
    echo "The day is Sunday";
} elseif ($dayNumber == 1) {
    echo "The day is Monday";
} elseif ($dayNumber == 2) {
    echo "The day is Tuesday";
} elseif ($dayNumber == 3) {
    echo "The day is Wednesday";
} elseif ($dayNumber == 4) {
    echo "The day is Thursday";
} elseif ($dayNumber == 5) {
    echo "The day is Friday";
} elseif ($dayNumber == 6) {
    echo "The day is Saturday";
}