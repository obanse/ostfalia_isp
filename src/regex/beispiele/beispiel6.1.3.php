<?php
/**
 * Created by PhpStorm.
 * User: olive
 * Date: 03.07.2019
 * Time: 15:40
 */

$text = "PHP macht viel Spass";
print_r('Eingabetext: <strong>' . $text . '</strong><br>');

$pattern = '/viel/';
print_r('Suchmuster: <strong>' . $pattern . '</strong><br>');

$replacment = 'keinen';
print_r('Ersetzen mit: <strong>' . $replacment . '</strong><br>');

$newText = preg_replace($pattern, $replacment, $text);

print $newText . '<br>';

print 'Test: ' . preg_replace("/H/", "M", "Haus-Auto");