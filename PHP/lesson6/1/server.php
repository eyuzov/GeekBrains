<?php

$a = str_split((string)$_POST['a']);
$b = str_split((string)$_POST['b']);

$digits = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

for ($i = 0; $i < count($a); $i++) {
    if (array_search($a[$i], $digits) == 0) {
        die(" Введите корректные значения");
    }
}
for ($i = 0; $i < count($b); $i++) {
    if (array_search($b[$i], $digits) == 0) {
        die(" Введите корректные значения");
    }
}
$res = 0;
switch ($_POST['operation']) {
    case"+":
        $res = (int)$_POST['a'] + $_POST['b'];
        break;
    case"-":
        $res = (int)$_POST['a'] - $_POST['b'];
        break;
    case"*":
        $res = (int)$_POST['a'] * $_POST['b'];
        break;
    case"/":
       $res = (int)$_POST['a'] / $_POST['b'];
}
