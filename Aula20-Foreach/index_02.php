<?php

$arrNotas = [
    "aluno1" => [
        "nome" => "Gunnar",
        "nota" => 7
    ],
    "aluno2" => [
        "nome" => "Lucia",
        "nota" => 10
    ],
    "aluno3" => [
        "nome" => "Natalia",
        "nota" => 0
    ],
    "aluno4" => [
        "nome" => "Fernando",
        "nota" => 9
    ],
    "aluno5" => [
        "nome" => "Leandro",
        "nota" => 10
    ],
    "aluno6" => [
        "nome" => "Fulano",
        "nota" => 7.4
    ],
    "aluno7" => [
        "nome" => "Ciclano",
        "nota" => 0
    ],
    "aluno8" => [
        "nome" => "Deltrano",
        "nota" => 9.5
    ]
];

foreach ($arrNotas as $aluno=>$info){
    echo "{$aluno} <br>";
    foreach ($info as $chave => $valor){
        echo "{$chave} = {$valor} <br>";
    }
    echo "<br>";
}
