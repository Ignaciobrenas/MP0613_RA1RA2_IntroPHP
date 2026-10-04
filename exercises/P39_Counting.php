<?php

class P39_Counting
{
    public function main(): void
    {
        // Write your program here
        $target = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        for ($i = 0; $i <= $target; $i++) {
            echo $i . "\n";
        }
    }
}
