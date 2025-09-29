<?php
session_start();
require "Usuario.Class.php";
$email = filter_var($_POST['emailUser'], FILTER_SANITIZE_EMAIL);
$senha = password_hash($_POST['senhaUser'], PASSWORD_DEFAULT);
$nameUser = $_POST["nameUser"];
$Usuario = new Usuario(); 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: rgb(255, 240, 24);
      margin: 0;
    }

    .title {
      font-size: 5vw;
      color: black;
      font-weight: 600;
      margin-bottom: 40px;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

  </style>
</head>

<body>
  <?php
    if (isset($_SESSION["email"]) && isset($_SESSION["nome"])) {
      echo "<script>alert(\"Voce já está logado a uma conta, é preciso sair para criar outra!\")</script>";
      echo "<script>location.href = '../html/home.php'</script>";
      exit();
    } else {
      if ($Usuario->checkUser($email) == 0) {
        if (!empty($email) && !empty($senha)) {
          $Usuario->insrtUser($nameUser, $email, $senha);

          $_SESSION["email"] = $email;
          $_SESSION["nome"] = $nameUser;
          echo "<script>alert(\"Cadastro realizado com sucesso!\")</script>";
          echo "<script>location.href = '../html/home.php'</script>";
        }
      } else {
        echo "<script>alert(\"Tente usar outro email!\")</script>";
        echo "<script>location.href = '../html/home.php'</script>";
      }
    }
    ?>
  <div class="title">TenisBR</div>
 
</body>

</html>