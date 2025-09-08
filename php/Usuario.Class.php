<?php

class Usuario
{
  public $pdo;
  private $user;
  private $pass;

  function __construct()
  {
    $cnct = "mysql:dbname=sessaologins;host=localhost";
    $this->user = "root";
    $this->pass = "";

    try {
      $this->pdo = new PDO($cnct, $this->user, $this->pass);
      return true;
    } catch (PDOException $e) {
      $errorCode = $e->getCode();

      if($errorCode == 1049){
        echo "<script>alert('Erro: Banco de dados não encontrado!')</script>";
      }
      else if($errorCode == 2002){
         echo "<script>alert('Erro: Não foi possível conectar ao servidor MySQL!')</script>";
      }
      else{
        echo "<script>alert('Erro de conexão: " . addslashes($e->getMessage()) . "')</script>";
      }
      exit;
    }
  }

  function checkUser($email)
  {
    $sql = $this->pdo->prepare("SELECT * FROM usersss WHERE email = :e");
    $sql->bindValue(":e", $email);
    $sql->execute();
    return $sql->rowCount();
  }

  function checkPass($email, $senha)
  {
    $sqlPass = $this->pdo->prepare("SELECT senha FROM usersss WHERE email = :e");
    $sqlPass->bindValue(":e", $email);
    $sqlPass->execute();
    $row = $sqlPass->fetch(PDO::FETCH_ASSOC);
    $passHash = $row["senha"];
    if (password_verify($senha, $passHash)) {
      return true;
    }
    return false;
  }
  function insrtUser($name, $email, $pass)
  {
    $sql = $this->pdo->prepare("INSERT INTO usersss SET nome = :n , email = :e , senha = :s");
    $sql->bindValue(":n", $name);
    $sql->bindValue(":e", $email);
    $sql->bindValue(":s", $pass);
    $sql->execute();
  }
}
