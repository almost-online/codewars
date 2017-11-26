<?php

use PHPUnit\Framework\TestCase;

include 'TankVol.php';

class TankVolTestCases extends TestCase
{
    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testBasics()
    {
        $this->revTest(tankvol(5, 7, 3848), 2940);
        $this->revTest(tankvol(2, 7, 3848), 907);
        $this->revTest(tankvol(2, 8, 5026), 982);
        $this->revTest(tankvol(4, 9, 6361), 2731);
    }
}