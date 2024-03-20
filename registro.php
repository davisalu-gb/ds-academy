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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>

<div class="container">

    <h2>Registro</h2>
    <form action="registro.php" method="POST">
        <input type="text" name="nome" id="nome" placeholder="Usuário" class="inputUser" required>
        <input type="text" name="senha" id="senha" placeholder="Senha" class="inputUser" required>
        <input type="text" name="email" id="email" placeholder="Email" class="inputUser" required>
        <input type="telefone" name="telefone" id="telefone" placeholder="Telefone" class="inputUser" required>  
        <input type="submit" name="submit" id="submit">Registrar-se</button>
    </form>

</div>

</body>
</html>
