<?php

class P37_AverageOfNumbers
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
        $average = $count > 0 ? $sum / $count : 0;
        echo "Average of the numbers: " . $average . "\n";
    }
}
