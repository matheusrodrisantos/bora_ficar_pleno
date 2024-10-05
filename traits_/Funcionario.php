<?php

include_once('./Pessoa.php');
include_once('./Trabalha.php');

class Funcionario extends Pessoa{
    use Trabalha;

    private $turno;

    public function __construct()
    {
        $this->nome='Matheus';
        $this->idade='65';
        $this->turno='6h';

        print("Nome:".$this->nome).PHP_EOL;
        print("Idade:".$this->idade).PHP_EOL;
        print("Turno:".$this->turno).PHP_EOL;
    }

    public function trabalha(){
        echo "trabalha: ".$this->turno.PHP_EOL;
    }

    
}