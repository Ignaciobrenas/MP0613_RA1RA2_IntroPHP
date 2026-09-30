<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $sum = 0;
        do {
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            $sum += $number;
        } while ($number !== 0);
        echo "Sum of the numbers: " . $sum . "\n";
    }
}

