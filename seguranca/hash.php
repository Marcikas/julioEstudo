<?php

// Protegendo senhas com funções nativas do PHP
$senha = "segredo";
$senhaCriptografada = password_hash($senha, PASSWORD_ARGON2ID); // criptografando com o argon2id(algoritmo de hash mais forte atualmente)
echo $senhaCriptografada; // você perceberá que a hash é alterada a cada atualização da página

// Verificando se as senhas batem

// para testar, troque o valor da variável $senha por um outro valor diferente da palavra "segredo"
if (password_verify($senha, $senhaCriptografada)) {
    echo "<br> As senhas batem!";
} else {
    echo "<br> Ops! as senhas não batem :(";
    # code...
}
