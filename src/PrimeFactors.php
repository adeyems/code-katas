<?php
declare(strict_types=1);


namespace App;


class PrimeFactors
{

    /**
     * PrimeFactors constructor.
     * @param int $number
     * @return array
     */
    public function generatePrimeFactors(int $number) : array
    {
        $factors = [];
        for ($divisor = 2;  $number > 1; $divisor++){
            for (; $number % $divisor === 0; $number /= $divisor){
                $factors[] = $divisor;
            }
        }

        return $factors;
    }
}

var_dump((new PrimeFactors())->generatePrimeFactors(2));