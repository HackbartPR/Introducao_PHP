<?php

$list = [
    ["nome"=>"Carlos", "nota"=>9],
    ["nome"=>"Diego", "nota"=>10],
    ["nome"=>"Bruno", "nota"=>3],
];

function ordenarNotas(array $aluno1, array $aluno2):int{
    if($aluno1['nota'] > $aluno2['nota'])
        return -1;
    
    if($aluno2['nota'] > $aluno1['nota'])
        return 1;
    
    return 0;
}

function ordenarNotasResumido(array $aluno1, array $aluno2):int{
    return $aluno2['nota'] <=> $aluno1['nota'];
}

//usort($list, 'ordenarNotas');
usort($list, 'ordenarNotasResumido');
var_dump($list);