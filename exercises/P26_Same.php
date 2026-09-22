<?php

class P26_Same
{
    public function main(): void
    {
        // Write your code here

        echo "Enter the first string:\n";
        $string1 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        echo "Enter the second string:\n";
        $string2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($string1 === $string2) {
            echo "Same\n";

        } else {
            echo "Different";
        }
        
    }
}
