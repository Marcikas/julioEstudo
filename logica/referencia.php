<?php

// Referência de variável no PHP

// exemplo 1 - passando referencias em parâmetros de funções
$numero = 5;
echo "<br>$numero";

function dobraNumero($num) // função com parâmetro normal
{
    $num *= 2; // a alteração na variável dentro do escopo não modifica a variável passada por parâmetro
}

dobraNumero($numero);
echo "<br>$numero";

function dobraNumeroReferencia(&$num) // o operador & indica que o parâmetro é uma referência de uma variável existente
{
    $num *= 2; // a alteração na variável dentro do escopo modifica a variável passada por parâmetro
}

dobraNumeroReferencia($numero);
echo "<br>$numero";

// exemplo 2 - variáveis referenciando outras variáveis
echo("<br> ---------------------------- <br>");

$a = 10;
$b = &$a; // B agora é uma referência de A

echo "<br>A: $a";
echo "<br>B: $b";

$b = 15; // alterando o valor de B, será que vai impactar a variável A?

echo "<br>A: $a";
echo "<br>B: $b";

$a += 10; // alterando o valor de A, será que vai impactar a variável B?

echo "<br>A: $a";
echo "<br>B: $b";

$c = &$b;

$a += 20; // alterando o valor de A, será que impacta a variável C?

echo "<br>A: $a";
echo "<br>B: $b";
echo "<br>C: $c";

$a += 20; // alterando o valor de A, será que impacta a variável C?

echo "<br>A: $a";
echo "<br>B: $b";
echo "<br>C: $c";

// exemplo 3 - comparando as referências (Utilizei as variáveis do exemplo anterior)

if ($a === $b) {
    echo "<br> A e B são identicos";
} else {
    # code...
    echo "<br> A e B não são identicos";
}

if ($a === $c) {
    echo "<br> A e C são identicos";
} else {
    # code...
    echo "<br> A e C não são identicos";
}

if ($b === $c) {
    echo "<br> B e C são identicos";
} else {
    # code...
    echo "<br> B e C não são identicos";
}

// exemplo 4 - referencias em objetos
Class Teste
{
    public $nome;
    public $idade;
}

$testeA = new Teste();
$testeA->nome = "Marciano";
$testeA->idade = 24;

var_dump($testeA);

$testeB = &$testeA;

var_dump($testeB);

$testeB->nome = "Victor"; // ao alterar a propriedade nome da variável de referencia, irá alterar o valor da variável referenciada?

var_dump($testeA);
var_dump($testeB);

// exemplo 5 - referencias em objetos clonados(Utilizei os objetos do exemplo anterior)
$testeC = clone $testeB;

var_dump($testeC);

$testeC->idade = 50; // ao alterar a propriedade de um objeto clonado, será que altera o valor do objeto original e do objeto que o mesmo referencia?

var_dump($testeA);
var_dump($testeB);
var_dump($testeC);

    // e se eu clonar uma referência de um determinado objeto?
// $testeD = clone &$testeC; // Não é possível clonar referências de objetos, esse código não rodará!
