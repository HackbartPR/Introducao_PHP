<?php

$conta1 = [
    'titular'=>'Carlos',
    'saldo'=>10000
];

$conta2 = [
    'titular'=>'Lais',
    'saldo'=>80000
];

$conta3 = [
    'titular'=>'Matheus',
    'saldo'=>100
];

$contasCorrentes = [$conta1, $conta2, $conta3];

foreach($contasCorrentes as $conta){
    echo "Titular: " . $conta['titular'] . " | Saldo: " . $conta['saldo'] . PHP_EOL;
}

//RECUPERANDO OS INDICES
foreach($contasCorrentes as $index=>$conta){
    echo "Index: $index Titular: " . $conta['titular'] . PHP_EOL;
}

