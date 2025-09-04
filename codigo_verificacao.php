<?php
session_start();
if (isset($_SESSION['erro_validacao'])) {
    echo '<div style="color: red; text-align: center; margin-bottom: 20px;">' . $_SESSION['erro_validacao'] . '</div>';
    unset($_SESSION['erro_validacao']);
}
?><!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Código de Verificação</title>
  <style>
    body.login-page {
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', sans-serif;
  background:  #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  color: #fff;
}

.container {
  background-color: #ffffff;
  padding: 40px 30px;
  border-radius: 12px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
  max-width: 400px;
  width: 100%;
  text-align: center;
  color: #333;
}

.title {
  font-size: 24px;
  margin-bottom: 25px;
  color: #a1001f;
}

.form input[type="text"] {
  width: 100%;
  padding: 12px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 8px;
  margin-bottom: 20px;
  box-sizing: border-box;
}

.form input::placeholder {
  color: #999;
}

.btn {
  width: 100%;
  padding: 12px;
  font-size: 16px;
  font-weight: bold;
  background-color: #a1001f;
  color: white;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #c3002f;
}

  </style>
</head>
<body class="login-page">
  <div class="container">
    <h2 class="title">Código de Verificação</h2>
    <form action="validar_codigo.php" method="POST" class="form">
      <input type="text" name="codigo" maxlength="6" placeholder="Código" required>
      <button type="submit" class="btn">Validar</button>
    </form>
  </div>
</body>
</html>