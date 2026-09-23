<?php

class P29_GiftTax
{
    public function main(): void
    {
        // Write your code here
        echo "Value of the gift? ";
        $gift = (float) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($gift < 5000) {
            echo "No tax!\n";

        } elseif ($gift <= 25000) {
            $tax = 100 + ($gift - 5000) * 0.08;
            echo "Tax: " . $tax . "\n";
        } elseif ($gift <= 55000) {
            $tax = 1700 + ($gift - 25000) * 0.10;
            echo "Tax: " . $tax . "\n";
        } elseif ($gift <= 200000) {
            $tax = 4700 + ($gift - 55000) * 0.12;
            echo "Tax: " . $tax . "\n";
        } elseif ($gift <= 1000000) {
            $tax = 22100 + ($gift - 200000) * 0.15;
            echo "Tax: " . $tax . "\n";
            
        } else {
            $tax = 142100 + ($gift - 1000000) * 0.17;
            echo "Tax: " . $tax . "\n";

        }
    }
}
