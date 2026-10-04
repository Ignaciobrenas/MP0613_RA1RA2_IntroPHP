<?php

class P43_Factorial
{
    public function main(): void
    {
        // Write your program here
        $n = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $fact = 1;
        for ($i = 1; $i <= $n; $i++) {
            $fact *= $i;
        }
        echo "Factorial: " . $fact . "\n";
    }
}
