<?php
header('Content-Type: application/json');

$usuarios = [
    [
        'cpf' => '123.456.789-00',
        'nome' => 'Pedro Silva',
        'telefone' => '(11) 98765-4321',
        'sexo' => 'masculino'
    ],
    [
        'cpf' => '143.754.921-00',
        'nome' => 'João Oliveira',
        'telefone' => '(21) 91234-5678',
        'sexo' => 'masculino'
    ],
    [
        'cpf' => '886.439.193-00',
        'nome' => 'Alexandre cezar',
        'telefone' => '(31) 99876-5432',
        'sexo' => 'masculino'
    ],

    [
        'cpf' => '128.665.158.-5',
        'nome' => 'Luiz inácio',
        'telefone' => '(11) 96789-0706',
        'sexo' => 'masculino'
    ],
    [
        'cpf' => '556.159.822-35',
        'nome' => 'Riquelme Carvalho',
        'telefone' => '(11) 9643-0706',
        'sexo' => ' Feminino'
    ]


    
    
];

foreach ($usuarios as &$usuario) {
    if (strtolower(trim($usuario['sexo'])) === 'feminino') {
        $usuario['saudacao'] = 'Bem Vindo' .  '!';
    } else {
        $usuario['saudacao'] = 'Bem Vindo' .  '!';
    }
}

echo json_encode($usuarios, JSON_UNESCAPED_UNICODE);
