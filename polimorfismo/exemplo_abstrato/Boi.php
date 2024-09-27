<?php

require_once('./Animal.php');

class Boi extends Animal{
    
    public function fazBarulho()
    {
        print("MUUUU").PHP_EOL;
    }
}