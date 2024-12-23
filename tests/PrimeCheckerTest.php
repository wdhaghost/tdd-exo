<?php

use PHPUnit\Framework\TestCase;

class PrimeCheckerTest extends TestCase{
    public function test_If_2_is_prime(){
        $primeChecker = new PrimeChecker();
        $result = $primeChecker->isPrime(2);
        $this->assertTrue($result);
    }
    public function test_If_4_is_not_prime(){
        $primeChecker = new PrimeChecker();
        $result = $primeChecker->isPrime(4);
        $this->assertFalse($result);
    }
}