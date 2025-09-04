<?php 
include 'include/conexao.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    
    try {
        $stmt = $pdo->prepare('INSERT INTO responsaveis (nome, email, telefone, senha) VALUES(?,?,?,?)');
        $stmt->execute([$nome, $email, $telefone, $senha]);
        
        // Redireciona para a tela inicial do responsável após cadastro
        header('Location: login_form.php');
        exit(); // Importante para parar a execução aqui
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro do Responsável</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #FFFFFF;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .form-container {
      background-color: #fff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 0 25px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #800000;
    }

    .form-container form {
      display: flex;
      flex-direction: column;
    }

    .form-container input {
      padding: 12px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 15px;
    }

    .form-container button {
      padding: 12px;
      background-color: #800000;
      color: white;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      width: 100%;
      margin-bottom: 10px;
    }

    .form-container button:hover {
      background-color: #a00000;
    }

    .secondary-button {
      background-color: #fff;
      color: #800000;
      border: 2px solid #800000;
      padding: 12px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      width: 100%;
      box-sizing: border-box;
    }

    .secondary-button:hover {
      background-color: #f9f9f9;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Cadastro do Responsável</h2>
    <form action="" method="POST">
      <input type="text" name="nome" placeholder="Nome Completo" required>
      <input type="text" name="telefone" placeholder="Telefone" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <button type="submit">Cadastrar</button>
    </form>

    <button type="button" class="secondary-button" onclick="window.location.href='login_form.php'">
     Fazer Login
    </button>
  </div>
</body>
</html>
