<?php

$idade = 18;
$numeroDePessoas = 1;

echo "Você só pode entrar se estiver mais do que 18 anos ou";
echo "a partir de 16 anos acompanhado\n";

if ($idade >= 18) {
    echo "Você tem $idade anos.\n";
    echo "Pode entrar sozinho";
} else if ($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
    echo "\nÉ uma pena";
}

echo "\nAdeus";
