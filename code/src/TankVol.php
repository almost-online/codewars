<?php
/**
 * @link https://www.codewars.com/kata/55f3da49e83ca1ddae0000ad/train/php
 *
 * @param $h
 * @param $d
 * @param $vt
 *
 * @return float|int
 */
function tankvol($h, $d, $vt)
{
    if ($d <= 0 || $h <= 0 || $vt <= 0) {
        return 0;
    }

    if ($h == $d) {
       return $vt;
    }

    $a = 2 * acos(1 - 2 * $h / $d );

    return floor($vt / (2 * M_PI) * ($a - sin($a)));
}

