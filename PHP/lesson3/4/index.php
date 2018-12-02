<?php
$chars = [
    "А" => "A",
    "Б" => "B",
    "В" => "V",
    "Г" => "G",
    "Д" => "D",
    "Е" => "E",
    "Ё" => "E",
    "Ж" => "ZH",
    "З" => "Z",
    "И" => "I",
    "Й" => "I",
    "К" => "K",
    "Л" => "L",
    "М" => "M",
    "Н" => "N",
    "О" => "O",
    "П" => "P",
    "Р" => "R",
    "С" => "S",
    "Т" => "T",
    "У" => "U",
    "Ф" => "F",
    "Х" => "KH",
    "Ц" => "TS",
    "Ч" => "CH",
    "Ш" => "SH",
    "Щ" => "SHCH",
    "Ы" => "Y",
    "Э" => "E",
    "Ю" => "IU",
    "Я" => "IA",
    " " => " ",
    "." => ".",
    "," => ",",
    "!" => "!",
    "?" => "?",
];

$string = "ПРИВЕТ, ВСЁ ХОРОШО! А У ТЕБЯ?";

function translit($str, $arr) {
    $result = "";
    $strlen = mb_strlen($str);
    for ($i = 0; $i < $strlen; $i++) {
        $substr = mb_substr($str, $i, 1);
        foreach ($arr as $key => $value) {
            if ($substr == $key) {
                $result .= $value;
                break;
            }
        }
    }
    return $result;
}
echo(translit($string, $chars));
