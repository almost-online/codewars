<?php
/**
 * @link https://www.codewars.com/kata/55f3da49e83ca1ddae0000ad/train/php
 */

function tankvol($h, $d, $vt)
{
    if ($d <= 0 || $h <= 0 || $vt <= 0) {
        return 0;
    }

    if ($h == $d) {
       return $vt;
    }

    $l = 4 * $vt/(M_PI * $d * $d);
    $a = 2 * acos(1 - 2 * $h / $d );

    return floor($l * ($d * $d / 8) * ($a - sin($a)));
}

