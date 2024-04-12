<?php
include_once('config.php'); // Corrija o caminho para incluir o arquivo config.php

// Verifique se a conexão com o banco de dados foi estabelecida corretamente
if(!$conexao) {
    die("Erro na conexão com o banco de dados");
}

if(isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Prevenção contra injeção SQL - use prepared statements
    $stmt = $conexao->prepare("INSERT INTO usuarios (nome, senha, email, telefone) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $senha, $email, $telefone);
    $stmt->execute();
    $stmt->close();
}
?>

