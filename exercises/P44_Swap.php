<?php

class P44_Swap
{
    public function main(): void
    {
        $array = [1, 3, 5, 7, 9];

        foreach ($array as $value) {
            echo $value . "\n";
        }

        echo "\n";

        // Write your code here
        $index1 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $index2 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $temp = $array[$index1];
        $array[$index1] = $array[$index2];
        $array[$index2] = $temp;

        echo "\n";
        foreach ($array as $value) {
            echo $value . "\n";
        }
    }
}
