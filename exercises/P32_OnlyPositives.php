<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        // Write your code here
        do {
            echo "Give a number:\n";
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($number > 0) {
                echo ($number * $number) . "\n";
            } elseif ($number < 0) {
                echo "Unsuitable number\n";
            }
        } while ($number !== 0);
    }
}
