<?php

use PHPUnit\Framework\TestCase;

include '55be95786abade3c71000079.php';

class be95786abade3c71000079Test extends TestCase
{
    public function testPush()
    {
        $this->assertEquals(1, push(null, 1)->data, "Should be able to create a new linked list with push().");
        $this->assertEquals(null, push(null, 1)->next, "Should be able to create a new linked list with push().");
        $this->assertEquals(2, push(new Node(1), 2)->data, "Should be able to prepend a node to an existing node.");
        $this->assertEquals(1, push(new Node(1), 2)->next->data,
            "Should be able to prepend a node to an existing node.");
    }

    public function testBuildOneTwoThree()
    {
        $this->assertEquals(1, build_one_two_three()->data, "Value at index 0 should be 1.");
        $this->assertEquals(2, build_one_two_three()->next->data, "Value at index 1 should be 2.");
        $this->assertEquals(3, build_one_two_three()->next->next->data, "Value at index 2 should be 3.");
        $this->assertEquals(null, build_one_two_three()->next->next->next, "Value at index 3 should be null.");
    }
}
