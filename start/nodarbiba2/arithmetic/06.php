<?php

function cozaLozaWoza($low, $high)
{
    $counter = '';
    for ($i = $low; $i <= $high; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "CozaLoza" . " ";
        } else if ($i % 3 == 0 && $i % 7 == 0) {
            echo "CozaWoza" . " ";
        } else if ($i % 3 == 0) {
            echo "Coza" . " ";
        } else if ($i % 5 == 0) {
            echo "Loza" . " ";
        } else if ($i % 7 == 0) {
            echo "Woza" . " ";
        } else {
            echo $i . " ";
        }
        $counter++;
        if ($counter % 11 == 0) {
            echo "\n";
        }
    }
}

cozaLozaWoza(1, 110);
