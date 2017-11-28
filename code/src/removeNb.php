<?php
/**
 * @link https://www.codewars.com/kata/5547cc7dcad755e480000004/train/php
 */

function removeNb($n)
{
    $range = range(1, $n);
    $sum = array_sum($range);
    $res = [];

    while ($i = array_shift($range)) {
        foreach ($range as $j) {
            if (($i * $j) + $i + $j == $sum) {
                $res[] = [$i, $j];
                $res[] = [$j, $i];
            }
        }
    }

    return $res;
}


function removeNb1($n)
{
    $sum = array_sum(range(1, $n));
    $res = [];

    for ($i = 1; $i < $n; $i++) {
        for ($j = $i + 1; $j <= $n; $j++) {
            if (($i * $j) + $i + $j == $sum) {
                $res[] = [$i, $j];
                $res[] = [$j, $i];
            }
        }
    }

    return $res;
}