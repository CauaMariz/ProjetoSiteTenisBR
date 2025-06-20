<?php
session_start();
require "Usuario.Class.php";
$Usuario = new Usuario();
function nameUser($Usuario, $email)
{

  $sqlPass = $Usuario->pdo->prepare("SELECT nome FROM userss WHERE email = :e");
  $sqlPass->bindValue(":e", $email);
  $sqlPass->execute();
  if ($sqlPass->rowCount() > 0) {
    $linha = $sqlPass->fetch(PDO::FETCH_ASSOC);
    $_SESSION["nome"] = $linha["nome"];
  }
}
$email = trim($_POST["emailUser"]);
$senha = trim($_POST["senhaUser"]);

if (isset($_SESSION["email"]) && isset($_SESSION["nome"])) {
  echo "<script>alert('Voce ja esta conectado a uma conta! É necessario fazer logout para entrar em outra conta.')</script>";
  echo "<script>location.href = '../html/loginPag.php'</script>";
  exit;
} else {
  if (empty($email) || empty($senha)) {
    echo "<script>alert(\"É necessário inserir o email e a senha!\")</script>";
    echo "<script>location.href = '../html/loginPag.php'</script>";
    exit;
  } else if (strpos($email, " ") !== false || strpos($senha, " ") !== false) {
    echo "<script>alert(\"O email e a senha não podem conter espaços!\")</script>";
    echo "<script>location.href = '../html/loginPag.php'</script>";
    exit;
  } else {
    if ($Usuario->checkPass($email, $senha) == false || $Usuario->checkUser($email) == 0) {
      echo "<script>alert(\"O email ou a senha estão errados\")</script>";
      echo "<script>location.href = '../html/loginPag.php'</script>";
      exit;
    } else {
      nameUser($Usuario, $email);
      $_SESSION["email"] = $email;
      echo "<script>alert(\"Login realizado com sucesso!\")</script>";
      echo "<script>location.href = '../html/home.php'</script>";
    }
  }
}
