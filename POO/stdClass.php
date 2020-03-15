<?php

// o que é uma stdClass ? é um objeto genérico no qual você pode adicionar e remover propriedades e valores a qualquer momento
// geralmente é fruto de uma conversão de array para objeto

$pessoa = new \stdClass(); // criando um stdClass manualmente

// var_dump($pessoa); // você vai perceber que ao dar dump na variável, ela será um objeto stdClass

// exemplo 1 adicionando propriedades ao objeto
$pessoa->nome = 'Victor';
$pessoa->idade = 24;
$pessoa->endereco = 'GRU';

var_dump($pessoa);

// exemplo 2 - funções que recebem um objeto stdClass como parâmetro

$objeto = new \stdClass();
var_dump($objeto); // objeto antes o método
teste($objeto);
var_dump($objeto); // objeto após o método

function teste(\stdClass $obj)
{
    $obj->teste = "Propriedade nova adicionada"; // adicionando dinamicamente uma propriedade ao objeto stdClass
}

// exemplo 3 - obtendo um stdClass através de um json_decode
// por padrão o json_decode nos retorna um objeto stdClass contendo as chaves como propriedade e o valor do json como valor da propriedade
$stdClass = json_decode('{"nome": "Victor", "idade": 24}');
var_dump($stdClass);

// exemplo 4 - stdClass pode ser clonado
$stdClass2 = clone $stdClass;
$stdClass2->clonado = true;

var_dump($stdClass);
var_dump($stdClass2);

// exemplo 5 - funções no stdClass
$n1 = 3; $n2 = 8;
$stdClass2->soma = function () use ($n1, $n2){
    return $n1 + $n2;
};

var_dump($stdClass2);
$resultado = call_user_func($stdClass2->soma); // o atributo do tipo Closure pode ser chamado pela função call_user_func
echo $resultado;

// exemplo 6 - removendo atributo de um stdClass
unset($stdClass2->nome);
unset($stdClass2->soma);

var_dump($stdClass2);
