<?php

class Titular{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome){
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function consultarCpf():string{
        return $this->cpf;
    }

    public function consultarNome():string{
        return $this->nome;
    }
}