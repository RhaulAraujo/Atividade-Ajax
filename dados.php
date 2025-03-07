<?php
header('Content-Type: application/json');

$usuarios = [
    [
        'cpf' => '763.456.789-00',
        'nome' => 'Miguel Silva',
        'telefone' => '(11) 98765-4321',
        'sexo' => 'masculino'
    ],
    [
        'cpf' => '146.754.991-00',
        'nome' => 'Hernesto paulo',
        'telefone' => '(21) 96594-5678',
        'sexo' => 'feminino'
    ],
    [
        'cpf' => '886.987.323-00',
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
        'sexo' => 'masculino'
    ]


    
    
];

foreach ($usuarios as &$usuario) {
    if (strtolower(trim($usuario['sexo'])) === 'feminino') {
        $usuario['saudacao'] = 'Bem Vinda' .  '!';
    } else {
        $usuario['saudacao'] = 'Bem Vindo' .  '!';
    }
}

echo json_encode($usuarios, JSON_UNESCAPED_UNICODE);
