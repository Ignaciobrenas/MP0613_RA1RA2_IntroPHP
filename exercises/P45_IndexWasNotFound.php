<?php

class P45_IndexWasNotFound
{
    public function main(): void
    {
        
        $array = [6, 2, 8, 1, 3, 0, 9, 7];

        // Write your code here
        $search = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $foundIndex = array_search($search, $array, true);
        if ($foundIndex !== false) {
            echo $search . " is at index " . $foundIndex . ".\n";
        } else {
            echo $search . " was not found.\n";
        }
    }
}
