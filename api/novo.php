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
    </style>
</head>
<body>

<form action="api/processa_formulario.php" method="POST">
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
