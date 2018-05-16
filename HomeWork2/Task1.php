<?php

$text1 = 'var_test_text';

$part = explode('_', $text1);

foreach ($part as $key => $value) {
    if ($key > 0)
        echo ucfirst($value);   
    else
        echo $value;
    }


?>