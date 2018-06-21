<?php

function findMaxElement($arrayNum){
	if(!is_array($arrayNum)) {
		throw new InvalidArgumentException('Param must be array');
	}
	if(empty($arrayNum)){
		throw new InvalidArgumentException('Array can\'t be empty');
	}
	foreach ($arrayNum as $value) {
		if (!is_float($value) && !is_int($value)) {
			throw new InvalidArgumentException('Value must be only number');}
	}
	return max($arrayNum);
}