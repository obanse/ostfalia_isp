<?php
/**
 * Created by PhpStorm.
 * User: olive
 * Date: 03.07.2019
 * Time: 20:46
 */

echo "<h2>Array erstellen und in JSON codieren mit json_encode()</h2>";

$one = [
    "name" => "Schmid",
    "prename" => "Ute",
    "exams" => [
        "Mathe 2",
        "BWL",
        "Design",
        "Internet-Programmierung"
    ]
];

$two = json_encode($one);

echo "<pre>";
    print_r($two);
echo "</pre>";

echo "<h2>JSON Text einlesen und in Array codieren mit json_decode()</h2>";

$arrOne = json_decode($two);

echo "<pre>";
    print_r($arrOne);
echo "</pre>";