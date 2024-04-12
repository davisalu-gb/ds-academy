<?php
$db_Host = 'localhost';
$db_Username = 'root';
$db_Password = ''; // Insira sua senha do MySQL aqui, se aplicável
$db_Name = 'formulario_registro';

// Conexão com o banco de dados
$conexao = new mysqli($db_Host, $db_Username, $db_Password, $db_Name);

// Verifica se ocorreu algum erro na conexão
if($conexao->connect_errno) {
    echo "Erro na conexão: " . $conexao->connect_error;
    exit(); // Saia do script em caso de erro na conexão
}
?>
