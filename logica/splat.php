<?php

// exemplo parâmetro de função 1
$soma = soma(12, 15, 56, 4, 78);
echo  "<br>" . $soma;

function soma(int ...$values) // detalhe, somente o ultimo parâmetro da função pode ser splat
{
    $resultado = 0;

    foreach ($values as $value) {
        $resultado += $value;
    }
    return $resultado;
}

// exemplo parâmetro de função 2
$soma = soma2(function (array $param) {
    $resultado = 0; // iniciando a variável
    foreach ($param as $numero) {
        $resultado += $numero;
    }
    return $resultado;
}, 12, 15, 56, 4, 78);

echo "<br>" . $soma;

function soma2(callable $operacao, int ...$parametros)
{
    return $operacao($parametros);
}

// exemplo splat como unpacking de variaveis
$numeros = [4,8,33,109];
$soma = soma3(...$numeros); // equivalente a um soma3($numeros[0], $numeros[1], $numeros[2], $numeros[3]);
$soma2 = soma3($numeros[0], $numeros[1], $numeros[2], $numeros[3]); 

echo "<br>" . $soma;
echo "<br>" . $soma2;

function soma3(int $n1, int $n2, int $n3, int $n4) // o numero de elementos do array deve ser o mesmo do número de parâmetros da função
{
    return $n1 + $n2 + $n3 + $n4;
}


