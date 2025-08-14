<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - VanSchool</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      height: 100vh;
      background-color: #ffffff;
    }

    .left-section {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 48px;
      font-weight: bold;
      padding-left: 40px;
    }

    .right-section {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-box {
      background-color: #f8f8f8;
      padding: 30px 25px;
      border-radius: 10px;
      width: 100%;
      max-width: 340px;
    }

    .login-box h2 {
      text-align: center;
      color: #a1001f;
      margin-bottom: 25px;
    }

    .login-box input[type="email"],
    .login-box input[type="password"] {
      width: 100%;
      background-color: #a1001f;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 10px;
      margin-bottom: 16px;
      font-size: 14px;
    }

    .login-box input::placeholder {
      color: white;
    }

    .login-box button {
      width: 100%;
      background-color: #d3d3d3;
      color: #333;
      border: none;
      padding: 12px;
      border-radius: 10px;
      font-size: 14px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-box button:hover {
      background-color: #bbbbbb;
    }

    .options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 20px;
      font-size: 13px;
      color: #555;
      padding: 0 5px;
    }

    .options label {
      display: flex;
      align-items: center;
    }

    .options input[type="checkbox"] {
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <div class="left-section">
    Olá
  </div>
  <div class="right-section">
    <div class="login-box">
      <h2>Login</h2>
      <form action="processa_login.php" method="POST">
        <input type="email" name="email" placeholder="Entre com e-mail ou usuário" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">ENTRAR</button>
      </form>
      <div class="options">
        <label><input type="checkbox"> Lembrar minha senha</label>
        <a href="#" style="color:#333; text-decoration:none;">Esqueci minha senha</a>
      </div>
    </div>
  </div>
</body>
</html>
