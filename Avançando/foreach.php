<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Luigi',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-12' => [
        'titular' => 'Roberto',
        'saldo' => 300
    ]
];

$contasCorrentes['133.564.786-89'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
