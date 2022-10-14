<?php

$contasCorrentes = [
    '14784552766' => [
        'titular'=>'Carlos',
        'saldo'=>10000
    ],

    '01193220998' => [
        'titular'=>'Lais',
        'saldo'=>80000
    ],

    '91268453936' => [
        'titular'=>'Matheus',
        'saldo'=>100
    ]
];

sacar("14784552766", 500);
exibirContas($contasCorrentes);
depositar("14784552766", 100);
exibirContas($contasCorrentes);
echo exibirSaldo("14784552766");

function exibirContas($contas):void{
    foreach($contas as $cpf=>$conta){
        echo "$cpf  Titular:  {$conta['titular']}  | Saldo:  {$conta['saldo']}" . PHP_EOL;
    }
}

function sacar(string $cpf, float $valor):void{
    global $contasCorrentes;
    $saldo = $contasCorrentes[$cpf]['saldo'];

    if($saldo < $valor){
        echo "Você não pode sacar este valor" . PHP_EOL;
    }else{
        $contasCorrentes[$cpf]['saldo'] -= $valor;
    }
}

function depositar(string $cpf, float $valor):void{
    if($valor < 0){
        echo "Não é possível depositar um valor negativo!" . PHP_EOL;
        return;
    }

    global $contasCorrentes;
    $contasCorrentes[$cpf]['saldo'] += $valor;
}

function exibirSaldo(string $cpf): float {
    global $contasCorrentes;
    return $contasCorrentes[$cpf]['saldo'];
}


