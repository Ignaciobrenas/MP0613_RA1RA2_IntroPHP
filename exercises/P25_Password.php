<?php

class P25_Password
{
    public function main(): void
    {
        // Write your code here
        //se escribe la contraseña
        echo "Password?\n";

        $password = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($password === "Caput Draconis") {
            echo "Welcome!\n";
        } else {

           echo "Off with you!\n";
        }


        
    }
}
