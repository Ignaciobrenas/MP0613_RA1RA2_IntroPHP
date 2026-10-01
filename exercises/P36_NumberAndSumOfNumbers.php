<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $count = 0;
        $sum = 0;
        do {
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($number !== 0) {
                $count++;
                $sum += $number;
            }
        } while ($number !== 0);
        echo "Number of numbers: " . $count . "\n";
        echo "Sum of the numbers: " . $sum . "\n";
    }
}

