<?php
$arrayNum = array(342, 55, 33, 123, 66, 63, 9);
$sum = 0;
foreach ($arrayNum as $value) {
    $sum += substr_count($value, 3);  
}
echo $sum;

?>