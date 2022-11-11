<?php

require_once('./Conta.php');
require_once('./Titular.php');

$carlos = new Titular('14784552766', 'Carlos');
$conta = new Conta($carlos);

$depositar = $conta->depositar(100);

if($depositar)
    $sacar = $conta->sacar(10);

$extrato = $conta->extrato();

echo "Extrato $extrato" . PHP_EOL;

$lais = new Titular('01193220998', 'Lais');
$segundaConta = new Conta($lais);

$transferir = $conta->transferir(50, $segundaConta);

if($transferir){
    echo "Saldo Primeira Conta: {$conta->extrato()} " . PHP_EOL;
    echo "Saldo Segunda Conta: {$segundaConta->extrato()}" . PHP_EOL;
}

/* echo "Quantidade Total de Contas Criadas: " + Conta::$quantidadeContas + PHP_EOL; */
echo Conta::consultarQuantidadeConta();

//Libera memória desta conta
unset($segundaConta);

echo PHP_EOL . $conta->consultarNome();


    


