<?php
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
