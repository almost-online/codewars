<?php

use PHPUnit\Framework\TestCase;

include "removeNb.php";


class BuyingCarCases extends TestCase
{
    private function revTest($n, $expected)
    {
        $this->assertEquals($expected, $j = removeNb($n));
    }

    public function testBasics()
    {
        $this->revTest(100, []);
        $this->revTest(10, [[6, 7], [7, 6]]);
        $this->revTest(17, [[10, 13], [13, 10]]);
        $this->revTest(101, [[55, 91], [91, 55]]);
        $this->revTest(102, [[70, 73], [73, 70]]);
        //$this->revTest(198014950, [[99017425, 197995050], [197995050, 99017425]]);
    }
}