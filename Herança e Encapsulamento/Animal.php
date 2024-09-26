<?php 


class Animal{
    private $nome;
    private $idade;


    public function comer(){
        print("hummm que delicia");
    }
    public function dormir(){
        print("");
    }

    public function setNome($nome){
        $this->nome=$nome;
    }

    public function setIdade($idade){
        $this->idade=$idade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getNome(){
        return $this->nome;
    }
}

class Cachorro extends Animal{

    public function latir(){
        print("auaau").PHP_EOL;
    }

    public function comer(){
        print("hummm que delicia cadeira").PHP_EOL;
    }
}



$caramelo =  new Cachorro();
$caramelo->setNome("Bethoven");
$caramelo->setIdade(12);

print_r($caramelo);

$caramelo->latir();
$caramelo->comer();


