<?php

function sortByChoice($arr)
{
    $size = count($arr);

    for ($i = 0; $i < $size - 1; $i++) {
        $min = $i;

        for ($j = $i + 1; $j < $size; $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }

        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }
    return $arr;
}

var_dump(sortByChoice([5, 3, 2, 48, 4]));