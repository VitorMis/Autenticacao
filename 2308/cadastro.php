<?php

if(isset($_POST['submit'])){



//print_r($_POST['nome']);
//print_r($_POST['email']);
//print_r($_POST['telefone']);

include_once ('config.php');

$nome = $_POST['nome'];  // Supondo que você esteja obtendo os valores do formulário
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];

$query = "INSERT INTO usuarios(nome, email, telefone, senha) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conexao, $query);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ssss", $nome, $email, $telefone, $senha);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro na preparação da consulta: " . mysqli_error($conexao);
}


}
?>





<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

  <link rel="stylesheet" href="cadastro.css">
  </head>
  <body>
    <header>
      <h1>Controle ao Acesso</h1>
      <h2>Acesso ao Sistema</h2>
    </header>
     <a href="home.php">Voltar</a>
    <main>
      <form action="cadastro.php" method="post">

       <label for="email">Nome Completo</label>
       <input type="text" name="nome" id="nome">
       <br>
       <label for="senha">Senha</label>
       <input type="password" name="senha" id="senha">
       <br>
       <label for="telefone">Telefone</label>
       <input type="number" name="telefone" id="telefone">

       <label for="email">Email</label>
       <input type="text" name="email" id="email">
       <br>
       <input type="submit" name="submit" value="Enviar" />
       <input type="reset" value="Limpar">
    </form>

    </main>
  </body>
</html>
