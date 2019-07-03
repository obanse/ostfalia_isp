<?php
/**
 * Created by PhpStorm.
 * User: olive
 * Date: 03.07.2019
 * Time: 15:40
 */

$text = "Jörg André Meier (+#,.-)";
print_r('Eingabetext: <strong>' . $text . '</strong><br>');

$i = 1;
$patterns = [
    '/^.*$/',
    '/[\w\s]+/',
    '/[a-zäöüé\s]+/i'
];
foreach($patterns as $pattern) {
    print_r('Suchmuster ' .$i. ': <strong>' . $pattern . '</strong><br>');
    preg_match_all($pattern, $text, $match);
    echo "<pre>";
        print_r($match);
    echo "</pre>";
    echo "<hr>";
    $i++;
}
