<?php

session_start();
print_r($_SESSION);

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha'])== true)){

  unset($_SESSION ['email']);
  unset($_SESSION ['senha']);
  header('Location: logim.php');
}

$logado = $_SESSION['email'];



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema</title>
</head>
<body>

<h1>accesou</h1>

</body>
</html>
