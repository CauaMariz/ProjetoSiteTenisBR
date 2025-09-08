<?php
session_start();

if (!isset($_SESSION["email"]) || !isset($_SESSION["nome"])) {
 echo "<script>alert('Voce nao está logado em uma conta para sair'); window.location.href = '../html/home.php';</script>";

  exit;
}

unset($_SESSION["email"]);
unset($_SESSION["nome"]);
session_destroy();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Saindo...</title>
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

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .spinner {
      width: 60px;
      height: 60px;
      border: 6px solid #ddd;
      border-top: 6px solid #3498db;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin-bottom: 15px;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    .text {
      font-size: 1.2em;
      color: black;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="title">TenisBR</div>

  <div class="container">
    <div class="spinner"></div>
    <div class="text">Saindo...</div>
  </div>

  <script>
    setTimeout(function() {
      window.location.href = '../html/home.php';
    }, 1500);
  </script>
</body>

</html>