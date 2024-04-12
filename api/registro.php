<?php
if(isset($_POST['submit'])) {
    include_once('config.php'); // Corrija o caminho para incluir o arquivo config.php

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
