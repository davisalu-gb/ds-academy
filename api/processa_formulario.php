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
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de A</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="processa_formulario.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <label for="tipo">Tipo:</label><br>
        <select id="tipo" name="tipo">
            <option value="Administrador">Administrador</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
