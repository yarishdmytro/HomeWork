<?php
//0-59
$min = 30;

if ($min >= 0 && $min <= 15) {
    echo "First quarter";
} elseif ($min > 15 && $min <= 30) {
    echo "Second quarter";
} elseif ($min > 30 && $min <= 45) {
    echo "Third quarter";
} elseif ($min > 45 && $min <= 59) {
    echo "Fourth quarter";
} else {
    echo "Wrong num";
}


 
?>