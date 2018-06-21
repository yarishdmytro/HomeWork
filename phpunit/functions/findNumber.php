<?php

function findCountNumber($arrayNum)
{
	if(!is_array($arrayNum)) {
		throw new InvalidArgumentException('Param must be array');
	}

	$sum = 0;

	foreach ($arrayNum as $value) {

		if (!is_float($value) && !is_int($value)){
			throw new InvalidArgumentException('Value must be only number');
		}

		$sum += substr_count($value, 3);
	}

	return $sum;
}

//./vendor/bin/phpunit