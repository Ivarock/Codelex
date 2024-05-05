<?php

class NumberedSquare
{
    public function drawNumbers()
    {
        $min = (int)readline("Min: ");
        $max = (int)readline("Max: ");
        $range = $max - $min + 1;
        for ($i = 0; $i < $range; $i++) {
            for ($j = 0; $j < $range; $j++) {
                $current = $min + (($i + $j) % $range);
                echo $current;
            }
            echo "\n";
        }
    }
}

$square = new NumberedSquare();
$square->drawNumbers();