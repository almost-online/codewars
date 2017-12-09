<?php

use PHPUnit\Framework\TestCase;

include 'validBraces.php';

class ValidBracesTestCases extends TestCase
{
    public function testSamples()
    {
        $this->assertEquals(true, validBraces("()"));
        $this->assertEquals(false, validBraces("[(])"));
        $this->assertEquals(true, validBraces("[()]"));
        $this->assertEquals(true, validBraces("[()][()]"));
        $this->assertEquals(false, validBraces("({})[({})]{}({}){}({)}(({{[[]]}}))({{[[]]}}"));
        $this->assertEquals(false, validBraces("({})[({})]()[()][](})(({{[[]]}}))(({{[]}}))(({{}}))(({}))(())(){}({})[]())(}{][())({}}{()][][)(}{][(((({{}}]]))}])"));
    }
}
