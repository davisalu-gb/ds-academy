<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "formulario_registro";

try {
    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        throw new mysqli_sql_exception("Conexão falhou: " . $conn->connect_error);
    }

    // Verifica se o formulário foi submetido
    if (isset($_POST['submit'])) {
        // Prepara os dados para inserção no banco de dados
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        // Prepara a consulta SQL
        $sql = "INSERT INTO usuarios (nome, senha, email, telefone) VALUES ('$nome', '$senha', '$email', '$telefone')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro inserido com sucesso!";
        } else {
            throw new mysqli_sql_exception("Erro ao inserir registro: " . $conn->error);
        }
    }
} catch (mysqli_sql_exception $e) {
    echo "Erro: " . $e->getMessage();
}

// Fecha a conexão com o banco de dados
if(isset($conn)) {
    $conn->close();
}
?>
