<?php
use PHPUnit\Framework\TestCase;

include 'Interpreter.php';


class InterpreterTest extends TestCase {
    public function testExamples() {
        // Flips the leftmost cell of the tape
        $this->assertEquals("10101100", interpreter("*", "00101100"));
        // Flips the second and third cell of the tape
        $this->assertEquals("01001100", interpreter(">*>*", "00101100"));
        // Flips all the bits in the tape
        $this->assertEquals("11010011", interpreter("*>*>*>*>*>*>*>*", "00101100"));
        // Flips all the bits that are initialized to 0
        $this->assertEquals("11111111", interpreter("*>*>>*>>>*>*", "00101100"));
        // Goes somewhere to the right of the tape and then flips all bits that are initialized to 1, progressing leftwards through the tape
        $this->assertEquals("00000000", interpreter(">>>>>*<*<<*", "00101100"));
        // simple loop
        $this->assertEquals("111111111111", interpreter("[>*]", "100000000000"));
        // loop in loop
        $this->assertEquals("1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111", interpreter("[[>]*]", "1000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000"));
    }
}
