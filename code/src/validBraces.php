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
    // remove single braces
    $newString = strtr($braces, ['()' => '', '[]' => '', '{}' => '']);
    if (empty($braces)) {
        return true;
    // when no changes after replace
    } elseif ($newString == $braces) {
        return false;
    }

    return (validBraces($newString));
}

function validBraces1($braces)
{
    $pair = ['[' => ']', '{' => '}', '(' => ')',];
    $pair += [']' => '[', '}' => '{', ')' => '(',];

    while (strlen($braces) && isset($pair[$braces{0}])) {
        $j = strpos($braces, $pair[$braces{0}]);
        if ($j !== false && validBraces1(substr($braces, 1, $j - 1))) {
            $braces = substr($braces, $j + 1);
        } else {
            return false;
        }
    }

    return true;
}