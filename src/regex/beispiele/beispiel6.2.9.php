<?php
/**
 * Created by PhpStorm.
 * User: olive
 * Date: 03.07.2019
 * Time: 15:40
 */

$text = "in deutsches Datumsformat dd.mm.yyyy umwandeln Ausgang: 2019-07-03";
print_r('Eingabetext: <strong>' . $text . '</strong><br>');

$pattern = ' /(\d{4})-(\d{2})-(\d{2})/ ';
print_r('Suchmuster: <strong>' . $pattern . '</strong><br>');

$replacment = ' $3.$2.$1 ';
print_r('Ersetzen mit: <strong>' . $replacment . '</strong><br>');

$newText = preg_replace($pattern, $replacment, $text);

print $newText . '<br>';
