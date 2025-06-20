<?php 
session_start();
require "Usuario.Class.php";
$usuario = new Usuario();
function changeEmail($usuario){
    $emailUserDefault = filter_var($_POST["emailUserDefault"] , FILTER_SANITIZE_EMAIL);
    $emailUserNew = filter_var($_POST["emailUserNew"] , FILTER_SANITIZE_EMAIL);
     
    $sql = "UPDATE userss SET email = :eN WHERE email = :eD";

    $pdo = $usuario->pdo->prepare($sql);

    $pdo->bindValue(":eD" , $emailUserDefault);
    $pdo->bindValue(":eN" , $emailUserNew);
    $pdo->execute();
    return $pdo->rowCount();
}


if($_SESSION["email"] && $_SESSION["nome"]){
  //$nomeUser = $_POST["nameUser"];
  $emailUser = filter_var($_POST["emailUserDefault"] , FILTER_SANITIZE_EMAIL);
  //$passUser = $_POST["passUser"];

  if($usuario->checkUser($emailUser) == 1){
    changeEmail($usuario);
    echo "<script>alert(\"Email alterado!\")</script>";
  }
  else{
       echo "<script>alert(\"Seu antigo email está incorreto!\")</script>";
       echo "<script>location.href = '../html/pagUser.php'</script>";
  }
}