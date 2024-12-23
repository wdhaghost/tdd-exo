<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddition(){
        $calculator= new Calculator();
        $result = $calculator->add(1,2);
        $this->assertEquals(3,$result);

    }

    public function testSubstraction(){
        $calculator = new Calculator();
        $result = $calculator->substract(5,2);
        $this->assertEquals(3,$result);
    }

    public function testMultiplication(){
        $calculator = new Calculator();
        $result = $calculator->multiply(3,6);
        $this->assertEquals(18,$result);
    }
    public function testDivision(){
        $calculator = new Calculator();
        $result = $calculator->divide(20,4);
        $this->assertEquals(5,$result);
    }
    public function testCant_Use_Zero_In_Division(){
        $calculator = new Calculator();
        $result = $calculator->divide(2,0);
        $this->assertSame(['message'=>'Can\'t use 0'],$result);
    }

}