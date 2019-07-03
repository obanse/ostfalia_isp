<?php
/**
 * Created by PhpStorm.
 * User: olive
 * Date: 03.07.2019
 * Time: 15:40
 */

print 'Eingabetext: <br>';
$i = 1; $j = 1;
$text   =   array("Er hat 122,50 € auf dem Konto",
    "Er hat 122€ auf dem Konto",
    "Er hat 0,5 €",
    "Er hat 1220000000 € auf dem Konto",
    "Er hat nix",
    "Er hat ,5€");
foreach ($text as $line) {
    print_r('=> Zeile ' . $i . ': <strong>' . $line . '</strong><br>');
    $i++;
}
print '<br>';

$pattern = ' /^([A-Z\s]*?)(\d{1,6},?(\d{1,2})?\s?€)(.*)$/i ';
print_r('Suchmuster: <strong>' . $pattern . '</strong><br>');

$replacment = '($1)($2)($4)';
print_r('Ersetzen mit: <strong>' . $replacment . '</strong><br>');

$newText = preg_replace($pattern, $replacment, $text);
foreach ($newText as $zeile) {
    print_r('=> Zeile ' . $j . ': <strong>' . $zeile . '</strong><br>');
    $j++;
}
