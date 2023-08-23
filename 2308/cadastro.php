<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <header>
      <h1>Controle ao Acesso</h1>
      <h2>Acesso ao Sistema</h2>
    </header>
     <a href="home.php">Voltar</a>
    <main>
      <form action="rec.php" method="post">

       <label for="email">Email</label>
       <input type="text" name="email" id="email">
       <br>
       <label for="telefone">Telefone</label>
       <input type="number" name="telefone" id="telefone">
       <input type="submit" value="Enviar" />
       <input type="reset" value="Limpar">
    </form>
      
    </main>
  </body>
</html>
