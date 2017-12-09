<?php
/**
 * @link http://www.codewars.com/kata/5277c8a221e209d3f6000b56/train/php
 *
 * @param $braces
 *
 * @return bool
 */
function validBraces($braces)
{
    $pair = ['[' => ']', '{' => '}', '(' => ')',];
    $pair += [']' => '[', '}' => '{', ')' => '(',];

    while (strlen($braces) && isset($pair[$braces{0}])) {
        $j = strpos($braces, $pair[$braces{0}]);
        if ($j !== false && validBraces(substr($braces, 1, $j - 1))) {
            $braces = substr($braces, $j + 1);
        } else {
            return false;
        }
    }

    return true;
}