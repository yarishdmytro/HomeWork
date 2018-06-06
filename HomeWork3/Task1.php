<?php

$arr = array(1,3,2,4);
$tmp = array();
$res = array();

foreach ($arr as $item){
    $tmp[] = array_fill(0,$item,$item);
}
foreach ($tmp as $item){
    $res = array_merge($res, $item);
}
var_dump($res);

?>