<?php
/**
 * @link https://www.codewars.com/kata/56f7493f5d7c12d1690000b6/solutions/php
 */

function mean(array $a): array
{
    $ints = array_filter($a, function ($i) {
        return is_numeric($i);
    });

    $strs = array_filter($a, function ($i) {
        return !is_numeric($i);
    });

    return [array_sum($ints) / 10, implode('', $strs)];
}
