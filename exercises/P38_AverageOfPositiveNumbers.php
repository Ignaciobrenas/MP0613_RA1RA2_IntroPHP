<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        // Write your program here
        $count = 0;
        $sum = 0;
        do {
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($number > 0) {
                $count++;
                $sum += $number;
            }
        } while ($number !== 0);
        if ($count > 0) {
            echo ($sum / $count) . "\n";
        } else {
            echo "Cannot calculate the average\n";
        }
    }
}
