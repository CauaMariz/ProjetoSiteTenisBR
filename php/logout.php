<?php 
session_start();
unset($_SESSION['email']);
unset($_SESSION["nome"]);
session_destroy();

echo "<script>location.href = '../html/home.php'</script>";
exit;