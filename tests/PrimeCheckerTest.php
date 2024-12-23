<?php

use PHPUnit\Framework\TestCase;

class PrimeCheckerTest extends TestCase{
    public function test_If_2_is_prime(){
        $primeChecker = new PrimeChecker();
        $result = $primeChecker->isPrime(2);
        $this->assertTrue($result);
    }
}