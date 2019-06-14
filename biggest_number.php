<?php

function biggest($array)
{
    $max = $array[0];
    foreach ($array as $val) {
        if ($val > $max) {
            $max = $val;
        }
    }

    return $max;
}

var_dump(biggest([1, 35, 78, 7]));

