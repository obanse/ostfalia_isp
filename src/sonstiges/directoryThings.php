<?php
/**
 * Created by PhpStorm.
 * User: olive
 * Date: 03.07.2019
 * Time: 19:13
 */

$dir = opendir("../entwurfsmuster/classes/");
while($file = readdir($dir)) {
    echo "$file <br>";
}
