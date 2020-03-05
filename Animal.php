<?php 

require_once "Autorizacao.php";

class Animal implements Autorizacao
{
    public function autoriza()
    {
        echo "Não está autorizado";
    }
}