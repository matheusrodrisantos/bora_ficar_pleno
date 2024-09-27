<?php 

require_once('./IAnimal.php');

class Vaca implements IAnimal{
    
    public function dorme()
    {
        print(" muuu estou dormindo");
    }

    public function fazBaralho($som)
    {
        print("barulho: ".$som);
    }
}