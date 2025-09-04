<?php 
include 'include/conexao.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){//SERVER faz o requisito para utilizar POST(formulário html). Os 3 iguais significam idêntico. 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cnh = $_POST['cnh'];
    $senha = $_POST['senha'];
    

    $stmt = $pdo->prepare('INSERT INTO motoristas (nome, email, telefone,cnh,senha) VALUES(?,?,?,?,?)');
    $stmt->execute([$nome, $email, $telefone, $cnh, $senha]);

    header('Location: login_form.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Motorista</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    /* FORÇA a correção caso o style.css esteja com conflitos */
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
      color: #800000; /* vinho */
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
      margin-bottom: 15px;
    }

    .form-container button:hover {
      background-color: #a00000;
    }

    /* ESTILO DO BOTÃO DE LOGIN */
    .secondary-button {
      width: 100%;
      padding: 12px;
      background-color: transparent;
      color: #800000;
      border: 2px solid #800000;
      font-size: 16px;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
      text-align: center;
      display: block;
      box-sizing: border-box;
      text-decoration: none;
    }

    .secondary-button:hover {
      background-color: #800000;
      color: white;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Cadastro de Motorista</h2>
    <form action="" method="POST">
      <input type="text" name="nome" placeholder="Nome Completo" required>
      <input type="text" name="email" placeholder="Email" required>
      <input type="text" name="telefone" placeholder="Telefone" required>
      <input type="text" name="cnh" placeholder="CNH" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <button type="submit">Cadastrar</button>
    </form>

    <button type="button" class="secondary-button" onclick="window.location.href='login_form.php'">
     Fazer Login
    </button>
  </div>
</body>
</html>