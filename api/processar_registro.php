<?php
$servername = "localhost";
$username = "root";
$password = ''; // Você pode substituir isso por variáveis de ambiente mais seguras

// Inclui a classe mysqli_sql_exception
if (!class_exists('mysqli_sql_exception', false)) {
    require_once 'path_para_mysqli_sql_exception'; // Substitua 'path_para_mysqli_sql_exception' pelo caminho real do arquivo mysqli_sql_exception.php
}

try {
    // Cria a conexão
    $conn = new mysqli($servername, $username, $password);

    // Verifica a conexão
    if ($conn->connect_error) {
        throw new mysqli_sql_exception("Conexão falhou: " . $conn->connect_error);
    }

    // Seleciona o banco de dados
    $dbname = "formulario_registro";
    if (!$conn->select_db($dbname)) {
        throw new mysqli_sql_exception("Erro ao selecionar o banco de dados: " . $conn->error);
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
    echo "Erro000: " . $e->getMessage();
}

// Fecha a conexão com o banco de dados
if(isset($conn)) {
    $conn->close();
}
?>
