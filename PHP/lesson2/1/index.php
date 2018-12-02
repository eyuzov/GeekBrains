<?php

$a = 3;
$b = -8;

if ($a >= 0 && $b >= 0) {
    echo "a - b = " . $c = $a - $b;
} elseif ($a < 0 && $b < 0) {
    echo "a * b = " . $c = $a * $b;
} elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
    echo "a + b = " . $c = $a + $b;
}