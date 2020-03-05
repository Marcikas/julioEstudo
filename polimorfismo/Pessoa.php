<?php 

require_once "Autorizacao.php";

class Pessoa implements Autorizacao
{
    public function autoriza()
    {
        echo "Autorizado";
    }
}