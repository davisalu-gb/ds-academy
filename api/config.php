<?php
$db_Host = 'localhost';
$db_Username = 'root';
$db_Password = ''; // Insira sua senha do MySQL aqui, se aplicável
$db_Name = 'formulario_registro';

// Conexão com o banco de dados
$conexao = new mysqli($db_Host, $db_Username, $db_Password, $db_Name);

// Verifica se ocorreu algum erro na conexão
if($conexao->connect_error) {
    // Se ocorrer um erro na conexão, exiba uma mensagem de erro e interrompa o script
    die("Erro na conexão: " . $conexao->connect_error);
}
?>
