<?php
/**
 * @link https://www.codewars.com/kata/58678d29dbca9a68d80000d7/solutions/php
 *
 * @param string $code
 * @param string $tape
 * @param int    $position las cell positions
 *
 * @return string
 */
function interpreter(string $code, string $tape, &$position = 0): string
{
    $i = 0;
    while ($i < strlen($code)) {
        switch ($code{$i}) {
            case '>':
                $position++;
                break;
            case '<':
                $position--;
                break;
            case '*':
                $tape{$position} = 1 - $tape{$position};
                break;
            case '[':
                if ($tape{$position} !== '0') {
                    // run subcode block
                    $tape = interpreter(substr($code, $i + 1, strrpos($code, ']') - 1), $tape, $position);
                }
                $i = strrpos($code, ']') - 1;
                break;
            case ']':
                if ($tape{$position} !== '0') {
                    $i = strpos($code, '[') - 1;
                }
                break;
        }
        if ($position >= strlen($tape) || $position < 0) {
            break;
        }
        $i++;
    }

    return $tape;
}