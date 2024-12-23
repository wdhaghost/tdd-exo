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

}