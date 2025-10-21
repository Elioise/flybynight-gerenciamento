<?php

//Acessando o script de conexão ao BD ou seja: chama ou conecta ao BD

require_once "../conecta.php";

// criar o função
function buscarlojas($conexao)
{
    // Montamos o comando SQL para a consulta  
    $sql = "SELECT * FROM lojas ORDER BY nome";
    // Executamos o comando e guardamos o resultado da consulta
    $consulta = $conexao->query($sql);
    // Retornamos o resultado em formato de Array Associativo
    return $consulta->fetchAll();
}



// criar outra função para inserir

function inserirloja($conexao, $nome)
{
    // Montamos o comando SQL de INSERT para a consulta  
    $sql = "INSERT INTO lojas (nome) VALUES (:nome)";
    // Prepare o comando acima ANTES de executar no BD
    $consulta = $conexao->prepare($sql);

    // Anexar/atrelar/colocar um valor
    $consulta->bindValue(":nome", $nome);

    // Executamos a consulta com o comando e o valor
    $consulta->execute();
}
