<?php

function printArr($array) {
    for($i = 0; $i < count($array); $i++) {
        echo "<p>$array[$i]</p><br>";
    }
}