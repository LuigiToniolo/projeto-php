<?php

$idadeList = [21, 22, 19, 52, 30]; //array de dados

list($idadeLuigi, $idadeJoao, $idadeMaria) = $idadeList;

$idadeList [] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}
