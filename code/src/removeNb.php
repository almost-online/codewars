<?php
/**
 * @link https://www.codewars.com/kata/5547cc7dcad755e480000004/train/php
 */

function removeNb($n)
{
    $sum = ($n + 1) * $n / 2;
    $res = [];
    $min = 1;

    for ($i = $n; $i > $min; $i--) {
        if (($sum - $i) % ($i + 1) == 0) {
            $j = ($sum - $i) / ($i + 1);
            $min = max($min, $j);
            if (($j <= $n)) {
                $res[(int)$j] = [(int)$j, (int)$i];
                $res[(int)$i] = [(int)$i, (int)$j];
            }
        }
    }

    ksort($res);

    return array_values($res);
}