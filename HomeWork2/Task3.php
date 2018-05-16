<?php

$arrayNum = array(342, 55, 33, 123, 66, 63, 9);
    foreach ($arrayNum as $value) {
       $array =  str_split($value);
       $retVal = (in_array(3, $array)) ? $value. " " : NULL ;
       echo $retVal;
    }

    
?>