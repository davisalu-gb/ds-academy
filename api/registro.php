<?php
if(isset($_POST['submit'])) {
    include_once('config.php'); // Corrija o caminho para incluir o arquivo config.php

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Prevenção contra injeção SQL - use prepared statements
    $stmt = $conexao->prepare("INSERT INTO usuarios (nome, senha, email, telefone) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $senha, $email, $telefone);
    $stmt->execute();
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./vars.css" />
    <link rel="stylesheet" href="./style.css" />

    <style>
      a,
      button,
      input,
      select,
      h1,
      h2,
      h3,
      h4,
      h5,
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        border: none;
        text-decoration: none;
        appearance: none;
        background: none;

        -webkit-font-smoothing: antialiased;
      }
    </style>
    <title>Document</title>
  </head>
  <body>
    <div class="register">
      <img class="image-2" src="image-20.png" />
      <div class="frame-44">
        <div class="frame-45">
          <div class="frame-34">
            <div class="registro">Registro 1.0</div>
            <div class="group-2">
              <div class="j-possui-uma-conta-de-usu-rio">
                Já possui uma conta de usuário?
              </div>
              <div class="entrar-na-conta-login">
                <span>
                  <span class="entrar-na-conta-login-span">
                    Entrar na conta
                  </span>
                  <span class="entrar-na-conta-login-span2">Login !</span>
                </span>
              </div>
            </div>
          </div>
          <form action="api\registro.php" method="POST">
          <div class="group-37">
            <div class="email">Email</div>
            <div class="enter-your-email-address"><input type="email" id="email" name="email" placeholder="Digite seu e-mail" class="inputUser" required></div>
            <div class="rectangle-8"></div>
            <div class="message-1">
              <img class="group" src="group0.svg" />
            </div>
          </div>
          <div class="group-43">
            <div class="group-40">
              <div class="username">Usuário</div>
              <div class="enter-your-user-name"><input type="text" id="nome" name="nome" placeholder="Digite seu nome de usuário" class="inputUser" required></div>
              <div class="rectangle-8"></div>
            </div>
            <img class="user-1" src="user-10.svg" />
          </div>
          <div class="group-41">
            <div class="senha">Senha</div>
            <div class="rectangle-9"></div>
            <div class="group-35">
              <div class="senha-do-usu-rio"><input type="text" id="senha" name="senha" placeholder="Digite a sua senha" class="inputUser" required></div>
              <div class="padlock-1">
                <img class="group2" src="group1.svg" />
                <img class="group3" src="group2.svg" />
              </div>
            </div>
            <div class="invisible-1">
              <img class="group4" src="group3.svg" />
            </div>
          </div>
          <div class="group-44">
            <div class="telefone">Telefone</div>
            <div class="rectangle-92"></div>
            <div class="group-352">
              <div class="digite-o-seu-telefone"><input type="tel" id="telefone" name="telefone" placeholder="Digite seu numero" class="inputUser" required></div>
              <div class="padlock-12">
                <div class="group6">
                  <img class="image-3" src="image-30.png" />
                </div>
              </div>
            </div>
            <div class="invisible-12">
              <img class="group7" src="group6.svg" />
            </div>
          </div>
          <div class="group-39">
            <div class="frame-47">
              <div class="frame-46">
                <input class="registrar-se" type="submit" name="submit" id="submit" value="Registrar-se"></button>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </body>
</html>
