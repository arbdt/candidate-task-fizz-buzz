<?php


namespace App;

use LogicException;

// FIZZBUZZ definition
class FizzBuzz
{
    public function calculate(int $start, int $end): array
    {
        // array to store result
        $resultArray = array();

        // iterate through given range
        for ($counter = $start; $counter <= $end; $counter++){
            // check for fizz (divisible by 3), buzz (divisible by 5), both, or nothing (not divisible by either)
            // both conditions met
            if ($counter % 3 == 0 && $counter % 5 == 0) {
                $result = array('input' => $counter, 'output' => 'FizzBuzz');
                $resultArray[] = $result;
            }
            // divisible by 3 only
            else if ($counter % 3 == 0 && $counter % 5 != 0) {
                $result = array('input' => $counter, 'output' => 'Fizz');
                $resultArray[] = $result;
            }
            // divisible by 5 only
            else if ($counter % 3 != 0 && $counter % 5 == 0) {
                $result = array('input' => $counter, 'output' => 'Buzz');
                $resultArray[] = $result;
            }
            // divisible by neither
            else if ($counter % 3 != 0 && $counter % 5 != 0) {
                $result = array('input' => $counter, 'output' => '');
                $resultArray[] = $result;
            }
        }

        // return result
        return $resultArray;
    }
}