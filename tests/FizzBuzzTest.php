<?php
declare(strict_types=1);

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase{

    /**
     * @test
     * @dataProvider data
     * @param int $number
     * @param string $expected
     */
    public function it_generates_fizzbuzz(int $number, string $expected){
        $this->assertEquals($expected, FizzBuzz::generate($number));
    }

    /**
     * @test
     * @dataProvider outOfRangeData
     * @param int $number
     */
    public function it_checks_for_out_of_range_fizzbuzz_values(int $number){
        $this->assertFalse(FizzBuzz::generate($number));
    }

    public function data(){
        return [
          [3, "Fizz"],
          [5, "Buzz"],
          [4, ""],
          [7, ""],
          [9, "Fizz"],
          [15, "FizzBuzz"],
        ];
    }

    public function outOfRangeData(){
        return [[0], [-1], [-4]];
    }
}