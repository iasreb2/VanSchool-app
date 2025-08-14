<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
$tipo = $_SESSION['tipo'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Dashboard</title>
</head>
<body class="login-page">
  <div class="container">
    <h2 class="title">Bem-vindo, <?php echo ucfirst($tipo); ?>!</h2>
    <a href="logout.php" class="btn">Sair</a>
  </div>
</body>
</html>