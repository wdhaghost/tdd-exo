<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

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

}