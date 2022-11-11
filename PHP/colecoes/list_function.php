<?php

$dados = ['Carlos', 8, 25];

//CRIA AS VARIÁVEIS CORRESPONDENTES AOS VALORES DO VETOR
list($nome, $nota, $idade) = $dados;
var_dump($nome, $nota, $idade);

//OUTRA MANEIRA DE FAZER O MESMO
[$nome2, $nota2, $idade2] = $dados;
var_dump($nome2, $nota2, $idade2);

//UTILIZANDO VETORES ASSOCIATIVOS
$dados2 = ['nome' => 'Carlos', 'nota' => 8, 'idade' => 25];
['nome'=>$nome3, 'nota'=>$nota3, 'idade'=>$idade3] = $dados2;
var_dump($nome3, $nota3, $idade3);

//UTILIZANDO A FUNÇÃO EXTRACT
$dados3 = ['nome4' => 'Carlos', 'nota4' => 8, 'idade4' => 25];
extract($dados3);
var_dump($nome4, $nota4, $idade4);