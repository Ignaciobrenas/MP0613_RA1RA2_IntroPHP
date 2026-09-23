<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        // Write your code here
        $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($number < 0) {
            echo ($number * -1) . "\n";
        } else {
            echo $number . "\n";
        }
    }
}
