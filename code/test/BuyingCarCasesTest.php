<?php

use PHPUnit\Framework\TestCase;

include "removeNb.php";


class BuyingCarCases extends TestCase
{
    private function revTest($n, $expected)
    {
        $this->assertEquals($expected, removeNb($n));
        $this->assertEquals($expected, removeNb1($n));
    }

    public function testBasics()
    {
        $this->revTest(100, []);
        $this->revTest(10, [[6, 7], [7, 6]]);
        $this->revTest(17, [[10, 13], [13, 10]]);
        $this->revTest(101, [[55, 91], [91, 55]]);
        $this->revTest(102, [[70, 73], [73, 70]]);
    }
}