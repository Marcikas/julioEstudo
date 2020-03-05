<?php 

require_once "Autorizacao.php";

class Marciano implements Autorizacao
{
    public function autoriza()
    {
        echo "WTFFFFF";
    }
}