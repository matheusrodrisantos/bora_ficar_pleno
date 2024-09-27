<?php

require_once('./Animal.php');

class Gato extends Animal{
    
    public function fazBarulho()
    {
        print("miuaaau").PHP_EOL;
    }
}