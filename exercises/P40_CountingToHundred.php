<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        // Write your program here
        $start = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($start <= 100) {
            for ($i = $start; $i <= 100; $i++) {
                echo $i . "\n";
            }
        }
    }
}
