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
    echo "<p>largest number is: $max</p>";

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

function distribution($array) {
    if(!empty($array)) {
        $newArray = array();
        for($i = 0; $i < count($array); $i++) {
            if(!array_key_exists($array[$i], $newArray)) {
                $newArray[$array[$i]] = 1;
            } else {
                $newArray[$array[$i]] = $newArray[$array[$i]] + 1;
            }
        }
        return $newArray;
    }
}