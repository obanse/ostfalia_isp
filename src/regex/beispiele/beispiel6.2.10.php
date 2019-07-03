<?php
/**
 * Created by PhpStorm.
 * User: olive
 * Date: 03.07.2019
 * Time: 15:40
 */

$text = "Ich habe 122,50 € ausgegeben.";
print_r('Eingabetext: <strong>' . $text . '</strong><br>');

$pattern = '/
    ^.*?
    (
    \d{1,6}
    ,?
    (\d{1,2})?
    \s?€
    )
    . *$
    /x ';
print_r('Suchmuster: <strong>' . $pattern . '</strong><br>');

$replacment = '$1';
print_r('Ersetzen mit: <strong>' . $replacment . '</strong><br>');

$newText = preg_replace($pattern, $replacment, $text);

print $newText . '<br>';
