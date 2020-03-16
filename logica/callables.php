<?php

// O que é considerado um callable em PHP?
// 1 - Callbacks/Funções anônimas
// 2- String contendo o nome de uma função ja definida
// 3 - Instâncias de Classes que implementam o método mágico __invoke
// 4 - um array contendo em um índice o nome da classe, e no outro o nome do método da classe(que você passou no primeiro índice)

// Função base para todos os exemplos
function call(callable $callable)
{
    return $callable();
}

// exemplo 1 - utilizando callback
call(function () {
    echo "<br>Chamou callback";
});

// exemplo 2 - utilizando funções normais(com definição de nome e escopo)
call("imprime");

function imprime()
{
    echo "<br>Chamou função";
}

// exemplo 3 - utilizando uma classe que implementa o __invoke
call(new Invokable());

Class Invokable
{
    public function __invoke()
    {
        echo "<br>Chamou a classe Invokable através do método mágico __invoke";
    }

    static function imprime()
    {
        echo "<br>Chamou a classe Invokable através do array com o nome da classe e método";
    }
}

// exemplo 4 - utilizando um array contendo o nome da classe e o nome do método a ser invocado
// as três formas estão corretas
call(['Invokable', 'imprime']);
call([new Invokable(), 'imprime']); // nesse caso ele não chama o metodo __invoke
call([Invokable::class, 'imprime']);
