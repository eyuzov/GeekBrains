<?php

$cities = [
    "Moscow region" => ["Moscow", "Zelik", "Dubna"],
    "Krasnodar region" => ["Krasnodar", "Anapa", "Sochi"],
    "Smolensk region" => ["Smolensk", "Safonovo", "Igorevskaya"],
];

foreach ($cities as $regionKey => $regionArray) {

    echo $regionKey . "<br>";

    for ($i = 0; $i < count($regionArray); $i++) {
        if ($i < count($regionArray) - 1) {
            echo $regionArray[$i] . " ";
        } else {
            echo $regionArray[$i] . "<br><br>";
        }
    }
}
