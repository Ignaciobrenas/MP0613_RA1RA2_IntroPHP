<?php

class P20_Adulthood
{
    public function main(): void
    {
        // Prompt the user for input
        echo "How old are you? ";

        // Get input from the user
        $age = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check age value
        if ((int)$age >= 18) {
            echo "You are an adult\n";
        } else {
            echo "You are not an adult\n";
        }
    }
}
