<?php
    if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);
        //print_r($_POST['senha']);
        //print_r($_POST['email']);
        //print_r($_POST['telefone']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone) VALUES ('$nome','$senha','$email','$telefone')");
    }
?>
