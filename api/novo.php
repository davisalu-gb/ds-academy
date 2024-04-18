<?php
// Conexão com o banco de dados (substitua os valores conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$database = 'banco-de-dados';

// Estabelecer conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Inicializar a variável de erro
$error_msg = "";

// Processar os dados do formulário se o método de requisição for POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processar os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo'];
    $dataCriacao = date('Y-m-d');

    // Preparar e executar a query SQL para inserir os dados
    $sql = "INSERT INTO adm (Nome, Email, Senha, Tipo, DataCriacao) VALUES ('$nome', '$email', '$senha', '$tipo', '$dataCriacao')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro criado com sucesso!";
    } else {
        // Verificar se o erro é devido a uma entrada duplicada
        if ($conn->errno == 1062) {
            $error_msg = "Erro: Esta entrada já está sendo utilizada.";
        } else {
            $error_msg = "Erro ao criar registro: " . $conn->error;
        }
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>
        form {
            margin: 20px auto;
            width: 300px;
        }
        input[type="text"], input[type="email"], input[type="password"], select {
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<?php
// Exibir mensagem de erro se houver
if (!empty($error_msg)) {
    echo "<p class='error'>$error_msg</p>";
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>
    <label for="tipo">Tipo:</label>
    <select id="tipo" name="tipo" required>
        <option value="Administrador">Administrador</option>
        <option value="Aluno">Aluno</option>
    </select>
    <label for="telefone">Telefone:</label>
    <input type="text" id="telefone" name="telefone">
    <input type="submit" value="Enviar">
</form>

</body>
</html>
