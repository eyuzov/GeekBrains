<?php

$a = 3;
$b = 8;

function sum($x, $y) {
    echo $x + $y;
    return $x + $y;
}

function subt($x, $y) {
    echo $x - $y;
    return $x - $y;
}

function mult($x, $y) {
    echo $x * $y;
    return $x * $y;
}

function div($x, $y) {
    echo $x / $y;
    return $x / $y;
}

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "+":
            sum($arg1, $arg2);
            break;
        case "-":
            subt($arg1, $arg2);
            break;
        case "*":
            mult($arg1, $arg2);
            break;
        case "/":
            div($arg1, $arg2);
            break;
        default:
            echo "Wrong operation";
            return;
    }
}

mathOperation($a, $b, ".");
