<?php

declare(strict_types=1); // 1 = habilitado, 0 = desabilitado

// Ao desabilitar o modo strito, essa função vai funcionar(mesmo sendo passado os parâmetros de tipos errados)
function soma(int $int, float $float)
{
    return $int + $float;
}

try {
    $resultado = soma(1.0, '5.5');
    echo $resultado;
} catch (\TypeError $error) {
    echo $error->getMessage();
}

// O erro ocorre por você passar um dado float como parâmetro da função que espera um int e uma string em um campo que espera um float
// Com o modo strito desabilitado, o PHP se "esforça" para fazer o código funcionar, e faz uma conversão dos valores.

