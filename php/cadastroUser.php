<?php
session_start();
require "Usuario.Class.php";
$email = filter_var($_POST['emailUser'], FILTER_SANITIZE_EMAIL);
$senha = password_hash($_POST['senhaUser'], PASSWORD_DEFAULT);
$nameUser = $_POST["nameUser"];
$Usuario = new Usuario();

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
