<?php
declare(strict_types=1);


use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

/**
 * Class PrimeFactorsTest
 */
class PrimeFactorsTest extends TestCase
{
    /** @test
     *@dataProvider factors
     */
    function test_generates_prime_factors($number, $expected) {
        $factors = new PrimeFactors();
        $this->assertEquals($expected, $factors->generatePrimeFactors($number));
    }

    public function factors(){
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [7, [7]],
            [8, [2, 2, 2]],
            [9, [3, 3]],
            [11, [11]],
            [12, [2, 2, 3]],
            [17, [17]],
            [100, [2, 2, 5, 5]]
        ];
    }
}
