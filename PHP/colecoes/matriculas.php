<?php

$alunos2021 = ["Vinicius", "João", "Ana", "Roberto", "Maria"];

$novosAlunos = ['Patricia', "Nico", "Kilderson", "Daiane"];

//REALIZA A UNIÃO DOS ARRAYS SEM SOBRESCREVER VALORES
$alunos2022 = array_merge($alunos2021, $novosAlunos);

//REALILIZ A UNIÃO DOS ARRAYS, SEM SOBRESCREVER VALORES E POSSIBILITA INSERIR NOVOS VALORES FORA DE UM ARRAY
$novosAlunos2022 = [...$alunos2021, 'Carlos', ...$novosAlunos];

var_dump($alunos2022);
var_dump($novosAlunos2022);
