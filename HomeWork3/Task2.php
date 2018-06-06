<?php

$temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31, 28,
                        23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);
asort($temperatures);

$max = array_reverse($temperatures);
$resMax = array_slice($max, 0,3 );
var_dump($resMax);

$resMin = array_slice($temperatures, 0,3);
var_dump($resMin);


$middle = count($temperatures)/2;
$resMiddle = array_slice($temperatures,$middle,3);
var_dump($resMiddle);