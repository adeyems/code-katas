<?php
declare(strict_types = 1);

namespace App;

class FizzBuzz {

    public static function generate(int $number){
        $result = '';

        if ($number <= 0) return false;

        if ($number % 3 == 0) $result .= "Fizz";
        if ($number % 5 == 0) $result .= "Buzz";

        return $result;
    }
}