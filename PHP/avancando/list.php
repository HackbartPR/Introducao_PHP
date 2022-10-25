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

    foreach($contasCorrentes as $cpf=>$conta){
        //LISTA ATRIBUI OS VALORES ENCONTRADOS NO ARRAY E INSERE DENTRO DAS VARIÁVEIS TITULAR E SALDO
        list('titular'=>$titular, 'saldo'=> $saldo) = $conta;
        
        //OUTRA FORMA DE ESCRVER O LIST
        ['titular'=> $titular, 'saldo'=> $saldo] = $conta;

        echo "$cpf  Titular: $titular  Saldo: $saldo" . PHP_EOL;
    }

?>