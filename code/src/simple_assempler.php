<?php
/**
 * @link https://www.codewars.com/kata/58e24788e24ddee28e000053/solutions/php
 */

function simple_assembler($program)
{
    $res = [];

    for($i=0; $i < count($program);) {
        $p = explode(' ', $program[$i]);
        $command = $p[0];
        $param = $p[1];
        $value = $p[2] ?? null;

        switch($command) {
            case 'mov':
                $res[$param] = $res[$value] ?? (int)$value;
                break;
            case 'inc';
                $res[$param]++;
                break;
            case 'dec':
                $res[$param]--;
                break;
            case 'jnz':
                if($res[$param] ?? $param) {
                    $i += (int)$value ?? 0;
                    continue (2);
                }
              break;
        }
        $i++;
    }


    return $res;
}
