<?php
/**
 * Created by PhpStorm.
 * User: olive
 * Date: 03.07.2019
 * Time: 18:44
 */
// Unter den Includes

$debug="ja";

session_start();

if ($debug==="ja") {

    error_reporting (-1);
    echo "POST/GET <br>";

    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";

    echo "<hr>";

    echo "SESSION <br>";

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

} else {

    error_reporting (0);

}
