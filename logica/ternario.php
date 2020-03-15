<?php

$num = 18;

// if padrão
if ($num >= 18) {
    $retorno = "Maior de 18";
} else {
    $retorno = "Menor de 18";
}

echo($retorno);

// if ternário(? :)
$retorno = $num >= 18 ? "Maior de 18" : "Menor de 18";
echo "<br>" . $retorno;

// Null coalescing (??)
$numero = null;

$retorno = $numero ?? "Não há valor";
echo("<br>" . $retorno);

// O código acima é equivalente ao código abaixo

$retorno2 = $numero ? $numero : "Não há valor";
echo("<br>" . $retorno2);

// Ternário em retornos de funções
$valor = teste();
echo("<br>" . $valor);

function teste() 
{
    $retorno = null;
    return $retorno ?? "Variável NULL - Não há valor";
}

// ternário e coalescing em condicionais e loopings
$valor2 = 10;

if (!is_numeric($valor2 ?? 'Nada')) {
    echo("<br>Variável NULL - Não há valor");
} else {
    echo("<br> $valor2");
}

if (((($valor2 / 2) > 5) ? 0 : 1) == 1) {
    echo("o valor $valor2 dividido por dois é maior que 4");
} else {
    echo("o valor $valor2 dividido por dois é menor ou igual a 4");
}

while ((random_int(1, 100) > 50) ? 1 : 0 == 1) {
    echo("<br> Numero maior que 50");
}
