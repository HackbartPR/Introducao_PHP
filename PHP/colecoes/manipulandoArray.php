<?php

$notasBimestre1 = [
    "Vinicius" => 6,
    "João" => 8,
    "Ana" => 10,
    "Roberto" => 7,
    "Maria" => 9
];

$notasBimestre2 = [
    "Renato" => 6,
    "João" => 8,
    "Ana" => 10,
    "Roberto" => 7,
    "Maria" => 7
];

//COMO VERIFICAR A DIFERENÇA ENTRE VALORES DE ARRAYS?
//COM A FUNÇÃO ARRAY_DIFF(), VOCÊ CONSEGUE ANALISAR TODOS OS ELEMENTOS CUJO OS VALORES SEJAM DIFERENTES DO PRIMEIRO ARRAY DO PARAMETRO
var_dump(array_diff($notasBimestre1, $notasBimestre2));

//COMO VERIFICAR A DIFERENÇA ENTRE AS CHAVES DE ARRAYS?
//COM A FUNÇÃO ARRAY_DIFF_KEY(), VOCÊ CONSEGUE ANALISAR TODOS OS ELEMENTOS CUJO AS CHAVES SEJAM DIFERENTES DO PRIMEIRO ARRAY DO PARAMETRO
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

//COMO VERIFICAR A DIFERENÇA ENTRE AS CHAVES E OS VALORES DE ARRAYS?
//COM A FUNÇÃO ARRAY_DIFF_ASSOC(), VOCÊ CONSEGUE ANALISAR TODOS OS ELEMENTOS CUJO AS CHAVES E OS VALORES SEJAM DIFERENTES DO PRIMEIRO ARRAY DO PARAMETRO
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));