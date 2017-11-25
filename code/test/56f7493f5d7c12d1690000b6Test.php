<?php

use PHPUnit\Framework\TestCase;

include '56f7493f5d7c12d1690000b6.php';

class MeanTest extends TestCase
{
    public function testFixed()
    {
        $lst = ["u", "6", "d", "1", "i", "w", "6", "s", "t", "4", "a", "6", "g", "1", "2", "w", "8", "o", "2", "0"];
        $this->assertEquals([3.6, "udiwstagwo"], mean($lst));
        $lst = ["0", "c", "7", "x", "6", "2", "3", "5", "w", "7", "0", "y", "v", "u", "h", "i", "n", "u", "0", "0"];
        $this->assertEquals([3.0, "cxwyvuhinu"], mean($lst));
        $lst = ["0", "u", "a", "y", "0", "a", "9", "q", "3", "v", "g", "7", "6", "4", "y", "d", "8", "6", "0", "d"];
        $this->assertEquals([4.3, "uayaqvgydd"], mean($lst));
        $lst = ["s", "n", "9", "l", "0", "m", "i", "z", "9", "7", "y", "4", "z", "3", "3", "k", "4", "1", "0", "k"];
        $this->assertEquals([4.0, "snlmizyzkk"], mean($lst));
        $lst = ["5", "v", "u", "k", "8", "4", "9", "b", "9", "g", "5", "z", "3", "f", "6", "u", "i", "6", "6", "t"];
        $this->assertEquals([6.1, "vukbgzfuit"], mean($lst));
        $lst = ["1", "1", "1", "1", "1", "1", "1", "1", "1", "0", "a", "a", "d", "d", "g", "q", "u", "v", "y", "y"];
        $this->assertEquals([0.9, "aaddgquvyy"], mean($lst));
        $lst = ["1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "a", "a", "d", "d", "g", "q", "u", "v", "y", "y"];
        $this->assertEquals([1.0, "aaddgquvyy"], mean($lst));
    }

    public function testRandom()
    {
        $lst = [1, 2, 3, 4];
        $this->assertEquals([1, ""], mean($lst));
        $lst = [0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->assertEquals([1, ""], mean($lst));
        $lst = [10, '9', '3', 6, 3, 8, 1, '0', 4, 9, '5', '5', 2, 7, '4', '8', '0', '0', '8', 5,];
        $this->assertEquals([9.6999999999999993, ""], mean($lst));
    }
}