<?php

// Closures são funções anônimas no php(callbacks)
// Detalhe: ao utilizar o tipo Closure em uma função, ela aceitará apenas callbacks, portanto não confundir com "callable"
// Detalhe 2: Closure é um objeto porém não é possível instanciá-lo

// função base para o script
function executaClosure(Closure $closure) // função idêntica a call_user_func() porém que só aceita Closures
{
    return $closure(); // executa o callback passado
}

// exemplo 1

executaClosure(function () {
    echo "Chamou a closure";
});

// exemplo 2 - passando uma closure a uma variável
$soma = function ($n1, $n2) {
    return $n1 + $n2;
};

var_dump($soma); // ao dar um dump na variável você observa que a variável é do tipo Closure

$resultado = $soma(4, 4);
echo "<br>$resultado";

// exemplo 3 - passando uma variável do tipo closure a uma função que só aceita closures
$closure = function () {
    echo "<br>Chamou a closure armazenada na variável";
};

executaClosure($closure);

// exemplo 4 - closures com o operador USE(permite a utilização de variáveis externas na closure)
$n1 = 10; $n2 = 15;

$closure2 = function () use ($n1, $n2) {
    return $n1 + $n2;
};

// O código comentado abaixo não funciona, é um caso que o USE resolve!
// $closure2 = function ($n1, $n2) {
//     return $n1 + $n2; 
// };

$resultado = executaClosure($closure2);
echo "<br>$resultado";

