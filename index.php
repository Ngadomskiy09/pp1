<?php
/**
 * @author Nick Gadomskiy
 * @date 1-6-20
 * @url http://ngadomskiy.greenriverdev.com/IT328/pp1/
 * Pair Program 1
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

require('functions.php');

$numbers = array(7, 9, 8, 9, 8, 8, 6);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PP1</title>
</head>
<body>
    <h1>Pair Program 1</h1>
    <?php
        printArr($numbers);
        largest($numbers);
        removeDups($numbers);
        echo "<br>";
        foreach (distribution($numbers) as $single=>$value) {
            echo "$single => $value, ";
        }
    ?>

</body>
</html>
