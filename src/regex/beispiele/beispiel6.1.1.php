<?php
/**
 * Created by PhpStorm.
 * User: olive
 * Date: 03.07.2019
 * Time: 15:40
 */

$text = "PHP macht viel Spass";
print_r('Eingabetext: <strong>' . $text . '</strong><br>');

$suchmuster = '/ viel /';
print_r('Suchmuster: <strong>' . $suchmuster . '</strong><br>');

if ( preg_match($suchmuster, $text, $treffer) ) {

    print_r($treffer);

} else {

    print "Kein Treffer";

}
