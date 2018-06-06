<?php

    $array = array(
      'Automobile' => array(
          '(item) BMW X3' => 5,
          '(item) Audi A5' => 3,
        ),
        '(item) Bicycle BMX' => 7,
        '(item) Bicycle' => 5,
    );

    function sum($array, $level = 0){
        static $count;
        static $items;

        if (is_array($array)) {
            $level++;
            foreach ($array as $elements){
                sum($elements,$level);
            }
        } else{
            $count++;
            $items += $array;
        }
        return array('count' => $count, 'items' => $items);
    }
    $result = sum($array);

    print_r($result);

