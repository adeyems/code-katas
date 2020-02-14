<?php
declare(strict_types = 1);

use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

/**
 * Class PrimeFactorTest
*/
class RomanNumeralsTest extends TestCase{

    /** @test
     * @dataProvider checks
     * @param int $number
     * @param string $expected
     */
    function it_generates_roman_numeral(int $number, string $expected) : void {
        $this->assertEquals($expected, RomanNumerals::generate($number));
    }

    /**
     * @test
     * @dataProvider outOfRange
     * @param $numbers
     */
    public function it_checks_for_out_of_range($numbers){
        $this->assertFalse(RomanNumerals::generate($numbers));
    }

    public function checks()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [4, 'IV'],
            [9, 'IX'],
            [40, 'XL'],
            [499, 'CDXCIX'],
            [999, 'CMXCIX'],
        ];
    }

    public function outOfRange() {
        return [
            [-1], [0], [4000], [59000]
        ];
    }
}