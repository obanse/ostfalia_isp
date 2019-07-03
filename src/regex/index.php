<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reguläre Ausdrücke</title>
</head>
<body>
    <h2>Reguläre Ausdrücke</h2>
    <?php
        const PATTERN = '/^[a-z]*\d?\d?\.?\d?\d?\.?\d?\d?/';
        function regEx($text) {
            preg_match(PATTERN, $text, $result);
            return $result;
        }

        $dir = opendir("beispiele/");
        $i = 1;
        while($file = readdir($dir)) {
            if(!($file == '.' or $file == '..')) {
                echo '<a href="beispiele/' . $file . '">Beispiel '. $i++ .'</a><br>';
            }
        }
        closedir($dir);
    ?>
</body>
</html>