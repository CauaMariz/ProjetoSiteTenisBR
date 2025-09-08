<?php 
session_start();
require "Usuario.Class.php";
$usuario = new Usuario();
function changeEmail($usuario){
    $emailUserDefault = filter_var($_POST["emailUserDefault"] , FILTER_SANITIZE_EMAIL);
    $emailUserNew = filter_var($_POST["emailUserNew"] , FILTER_SANITIZE_EMAIL);
     
    $sql = "UPDATE usersss SET email = :eN WHERE email = :eD";

    $pdo = $usuario->pdo->prepare($sql);

    $pdo->bindValue(":eD" , $emailUserDefault);
    $pdo->bindValue(":eN" , $emailUserNew);
    $pdo->execute();
    return $pdo->rowCount();
}


if($_SESSION["email"] && $_SESSION["nome"]){

  $emailUser = filter_var($_POST["emailUserDefault"] , FILTER_SANITIZE_EMAIL);


  if($usuario->checkUser($emailUser) == 1){
    changeEmail($usuario);
    echo "<script>alert(\"Email alterado!\")</script>";
    echo "<script>location.href = '../html/pagUser.php'</script>";
  }
  else{
       echo "<script>alert(\"Seu antigo email está incorreto!\")</script>";
       echo "<script>location.href = '../html/pagUser.php'</script>";
  }
}