<?php

class P33_NumberOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $count = 0;
        do {
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($number !== 0) {
                $count++;
            }
        } while ($number !== 0);
        echo "Number of numbers: " . $count . "\n";
    }
}
