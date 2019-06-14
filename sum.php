<?php
//4.1 Напишите код для функции sum (просумировать все элементы в массиве)
//[199] => 1 + 9 + 9 => 19 => 1 + 9 => 10 => 1 + 0 = > 1
function sum($array)
{
    $res = array_sum($array);
    if ($res >= 10) {
        return sum(array_map('intval', str_split($res)));
    }

    return $res;
}

var_dump(sum([38])); // 2
