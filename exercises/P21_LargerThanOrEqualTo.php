<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give the first number:\n";

        // Get input from the user
        $num1 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        // Prompt the user for input
        echo "Give the second number:\n";
        
        // Get input from the user
        $num2 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Compare numbers
        if ($num1 > $num2) {
            echo "Greater number is: $num1\n";

        } elseif ($num2 > $num1) {
            echo "Greater number is: $num2\n";

        } else {

            echo "The numbers are equal! \n ";
        }
    }
}
