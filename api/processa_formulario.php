<?php
// Conexão com o banco de dados (substitua os valores conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$database = "banco-de-dados";

// Estabelecer conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Processar os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];
$dataCriacao = date('Y-m-d');

// Preparar e executar a query SQL para inserir os dados
$sql = "INSERT INTO Usuario (Nome, Email, Senha, Tipo, DataCriacao) VALUES ('$nome', '$email', '$senha', '$tipo', '$dataCriacao')";

if ($conn->query($sql) === TRUE) {
    echo "Registro criado com sucesso!";
} else {
    echo "Erro ao criar registro: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
