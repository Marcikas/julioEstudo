<?php

require_once "Pessoa.php";
require_once "Animal.php";
require_once "Marciano.php";

$pessoa = new Pessoa();
$animal = new Animal();
$victor = new Marciano();

teste($pessoa);
teste($animal);
teste($victor);

function teste(Autorizacao $auth)
{  
    $auth->autoriza();
}
