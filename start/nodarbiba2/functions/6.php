<?php

$elements = [1, 2, 4.88, 3, 'seven'];
function doubleInteger($number)
{
    return $number * 2;
}

$elementCount = count($elements);
for ($i = 0; $i < $elementCount; $i++) {
    $element = $elements[$i];
    if (is_integer($element)) {
        echo doubleInteger($element) . "\n";
    }
}
