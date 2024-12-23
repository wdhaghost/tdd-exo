<?php

class PrimeChecker
{
    public function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
    
        for ($i = 2; $i <= $number; $i++) {
            if ($number % $i == 0 && $number > $i) {
                return false; 
            }
        }
    
        return true;
        }
}
