<?php
/**
 * Created by PhpStorm.
 * User: olive
 * Date: 03.07.2019
 * Time: 20:34
 */

$filename = "../upload/test.txt";

$text = "Dies ist ein Beispiel-Text, \nder nur zum Test dienen soll.";
file_put_contents($filename, $text);

echo "<h2>Schreiben und anschließendes Lesen einer Datei</h2>";
if(file_exists($filename)) {
    echo "<pre>";
    print_r(file_get_contents($filename));
    echo "</pre>";
}

echo "<h2>Einlesen einer Datei in ein Array</h2>";
if(file_exists($filename)) {
    $arrText = file($filename);
    echo "<pre>";
    print_r($arrText);
    echo "</pre>";

}

echo "<h2>fopen(), feof(), fgets(), fclose()</h2>";
if(file_exists($filename)) {
    $testfile = fopen($filename, "r");

    while(!feof($testfile)) {
        $line = fgets($testfile, 1000);
        echo "$line <br>";
    }
    fclose($testfile);
}