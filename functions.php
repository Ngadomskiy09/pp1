<?php

function printArr($array) {
    for($i = 0; $i < count($array); $i++) {
        echo "<p>$array[$i]</p><br>";
    }
}

function largest($array) {
    $max = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if($max < $array[$i]) {
            $max = $array[$i];
        }
    }
    echo "<p>$max</p>";
}

function removeDups($array) {
    $removedDups = array();
    foreach($array as $arrayItem) {
        foreach($removedDups as $removedDupsItem) {
            if($arrayItem == $removedDupsItem) {
                continue 2;
            }
        }
        $removedDups[] = $arrayItem;
    }
    echo "[";
    for($i = 0; $i < count($removedDups); $i++) {
        echo $removedDups[$i].", ";
    }
    echo "]";

}