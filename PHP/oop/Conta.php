<?php
require_once('./Titular.php');

class Conta {
    private float $saldo;
    private static $quantidadeContas = 0;
    private Titular $titular;

    public function __construct(Titular $titular){
        $this->titular = $titular;
        $this->saldo = 0;

        self::$quantidadeContas++;
    }

    public function __destruct(){
        self::$quantidadeContas--;
    }

    public function sacar(float $saldo):bool{
        if($this->saldo < $saldo) return false;
        
        $this->saldo -= $saldo;
        return true;    
    }

    public function depositar(float $saldo):bool{
        if($saldo < 0) return false;

        $this->saldo += $saldo;
        return true;
    }

    public function transferir(float $saldo, Conta $conta):bool{
        if($saldo < 0 || $saldo > $this->saldo) return false;

        $this->sacar($saldo);
        $conta->depositar($saldo);
        return true;
    }

    public function extrato():float{
        return $this->saldo;
    }

    public function consultarNome():string{
        return $this->titular->consultarNome();
    }

    public function consultarCpf():string{
        return $this->titular->consultarCpf();
    }

    public static function consultarQuantidadeConta():int{
        return self::$quantidadeContas;
    }
}