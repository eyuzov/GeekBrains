<?php

$x = 0;
function show($a) {
    if ($a == 0) {
        echo "$a это ноль.<br>";
    } elseif ($a % 2 == 0) {
        echo "$a это четное число.<br>";
    } else {
        echo "$a это нечетное число.<br>";
    }
}

do {
    show($x);
    $x++;
} while ($x <= 10);
