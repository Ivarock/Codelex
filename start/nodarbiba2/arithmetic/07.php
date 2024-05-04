<?php

$a = -9.81; // Acceleration (m/s2)
$t = 10; // Time (s)
$vi = 0; // Initial velocity (m/s2)
$xi = 0; // Initial position

$distance = (0.5 * ($a * ($t * $t)) + ($vi * $t) + $xi);
echo $distance . 'm';