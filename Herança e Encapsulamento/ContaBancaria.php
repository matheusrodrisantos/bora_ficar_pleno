<?php

class ContaBancaria{
    private int $saldo;

    public function __construct()
    {
         $this->saldo=0;   
    }

    public function depositar(int $dinheiro) {
        $this->saldo=$this->saldo+$dinheiro;
    }

    public function sacar(int $dinheiro){
        if($this->saldo>$dinheiro){
            $this->saldo=$this->saldo-$dinheiro;
        }
    }   

    public function verificarSaldo(){
        return $this->saldo;
    }

}

$conta = new ContaBancaria();
$conta->sacar(100);
print_r($conta);
