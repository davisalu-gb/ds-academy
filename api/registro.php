<?php
    if(isset($_POST['submit']))
    {

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone']

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone) VALUES ('$nome','$senha','$email','$telefone')");
    }
?>