<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
        // Write your code here
        do {
            echo "Give a number:\n";
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        } while ($number !== 4);
    }
}
